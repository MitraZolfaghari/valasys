/**
 *
 * 1, define the edge ( begin and end ) of every title field
 * 2, parse all the lines except the title line, get all the connected-domains
 * 3, group all the connected-domains vertically overlapped.
 * 4, a domain group belongs to a title field if they vertically overlapped
 * 5, calculate all the edge info through the group domain and title field relations.
 */
var EMPTY_EX = /\s/;

/**
 * The output sting of cmd to parse
 * @param output
 * @returns {Array}
 */
// TableParse = function (output) {
function TableParse(output) {

    // Split into lines
    // Basically, the EOL should be:
    // - windows: \r\n
    // - *nix: \n
    // But i'm trying to get every possibilities covered.
    var linesTmp = output.split(/(\r\n)|(\n\r)|\n|\r/);

    // valid lines
    var lines = [];
    // title field info, mapped with filed name.
    var titleInfo = {};
    // the two dimensional array of the lines
    var twoDimArray = [];

    // get rid of all the empty lines.
    linesTmp.forEach(function (line) {
        if (line && line.trim()) {
            lines.push(line);
        }
    });

    // build title fields edge info
    // build two dimensional array for Connected-Domain to parse.
    lines.forEach(function (line, index) {

        // Treat the first line as the title fields line
        if (index == 0) {
            var fields = line.split(/\s+/);
            var currentIndex = 0;

            // record the beginning and ending for each field
            fields.forEach(function (field, idx) {

                if (field) {
                    var info = titleInfo[field] = {};
                    var indexBegin = line.indexOf(field, currentIndex);
                    var indexEnd = currentIndex = (indexBegin + field.length);

                    if (idx == 0) {
                        info.titleBegin = 0;
                    }
                    else {
                        info.titleBegin = indexBegin;
                    }

                    if (idx == fields.length - 1) {
                        info.titleEnd = line.length - 1;
                    }
                    else {
                        info.titleEnd = indexEnd;
                    }
                }
            });
        }
        else {
            twoDimArray[index - 1] = line.split('');
        }
    });

    // The final result
    var result = [];

    // Since we have got all the title bounding edges, we can split all the lines into values now
    lines.forEach(function (line, index) {
        // skip the first line
        if (index > 0) {

            var lineItem = {};
            var title = null;
            var info = null;
            var value = null;
            for (title in titleInfo) {
                info = titleInfo[title];
                value = line.substring(info.titleBegin, info.titleEnd + 1);
                lineItem[title] = splitValue(value.trim());
            }

            result.push(lineItem);
        }
    });

    return result;
};

/**
 * Test if two bounding overlapped vertically
 * @param begin1
 * @param end1
 * @param begin2
 * @param end2
 * @returns {boolean}
 */
function overlap(begin1, end1, begin2, end2) {
    return ( begin1 > begin2 && begin1 < end2 ) || // 2--1--2--1 or 2--1--1--2
        ( end1 > begin2 && end1 < end2 ) ||     // 1--2--1--2 or 2--1--1--2
        ( begin1 <= begin2 && end1 >= end2 );// 21--12 or 1--2--2--1
}

/**
 * transform a string value into array. It's not just split(), but also to consider some chunk that wrapped with `"`, like below:
 *      "C:\Program Files\Google\Chrome\Application\chrome.exe" --type=renderer --lang=zh-CN, `C:\Program Files\Google\Chrome\Application\chrome.exe` should be treated as a whole,
 *      also, be careful don't be mislead by format like `--name="neekey"`, even more complicated: `--name="Neekey Ni"`
 * so, `"C:\Program Files\Internet Explorer\iexplore.exe" --name="Jack Neekey"` should split into:
 *  - C:\Program Files\Internet Explorer\iexplore.exe  // without `"`
 *  - --name="Jack Neekey"                             // with `"`
 */
function splitValue(value) {

    var match = value.match(/"/g);

    // If only one " found, then just ignore it
    if (!match || match.length == 1) {
        return value.split(/\s+/);
    }
    else {
        var result = [];
        var chunk = null;
        var ifInWrappedChunk = false;
        var ifInPureWrappedChunk = false;
        var quotaCount = 0;

        // If the match length is a even, than nothing special, if a odd, ignore the last one.
        var maxQuotaCount = match.length % 2 == 0 ? match.length : match.length - 1;

        var previousItem = null;
        var values = value.split('');

        values.forEach(function (item, index) {

            if (item !== ' ') {

                if (item === '"') {
                    // quota chunk begin
                    if (ifInWrappedChunk === false && quotaCount <= maxQuotaCount) {
                        ifInWrappedChunk = true;
                        quotaCount++;

                        // pure quota chunk begin
                        if (previousItem === ' ' || previousItem === null) {
                            ifInPureWrappedChunk = true;
                            chunk = '';
                        }
                        // normal continue
                        else {
                            chunk += item;
                        }
                    }
                    // quota chunk end
                    else if (ifInWrappedChunk === true) {
                        ifInWrappedChunk = false;
                        quotaCount++;

                        // pure quota chunk end
                        if (ifInPureWrappedChunk === true) {
                            ifInPureWrappedChunk = false;
                            result.push(chunk);
                            chunk = null;
                        }
                        // normal continue
                        else {
                            chunk += item;
                        }
                    }
                }
                // normal begin
                else if (ifInWrappedChunk === false && ( previousItem === ' ' || previousItem === null )) {
                    chunk = item;
                }
                // normal or quota chunk continue.
                else {
                    chunk += item;
                }
            }
            // quota chunk continue, in quota chunk, blank is valid.
            else if (ifInWrappedChunk) {
                chunk += item;
            }
            // if not in quota chunk, them a blank means an end. But make sure chunk is exist, cause that could be blanks at the beginning.
            else if (chunk !== null) {
                result.push(chunk);
                chunk = null;
            }

            previousItem = item;

            // If this is the last one, but chunk is not end
            if (index == ( values.length - 1 ) && chunk !== null) {
                result.push(chunk);
                chunk = null;
            }
        });

        return result;
    }
}
