<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Functions</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    include 'db_connection.php';
    ?>

    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SQL Function</th>
                    <th>Description</th>
                    <th>Example Code</th>
                    <th>Example Output</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>String Functions</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>ASCII</td>
                    <td>Returns the ASCII value for the specific character.</td>
                    <td><code>SELECT ASCII(full_name) AS asciiValue FROM students;</code></td>
                    <td>
                        <a href="functions/ascii.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>CHAR_LENGTH</td>
                    <td>Returns the length of a string (in characters).</td>
                    <td><code>SELECT CHAR_LENGTH(full_name) AS LengthOfString FROM students;</code></td>
                    <td>
                        <a href="functions/char_length.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>CHARACTER_LENGTH</td>
                    <td>Returns the length of a string (in characters).</td>
                    <td><code>SELECT CHARACTER_LENGTH(full_name) AS LengthOfString FROM students;</code></td>
                    <td>
                        <a href="functions/character_length.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>CONCAT</td>
                    <td>Adds two or more expressions together.</td>
                    <td><code>SELECT CONCAT('Fullname: ', full_name, ' - GWA: ', gwa) AS studentGWA FROM
                            students;</code></td>
                    <td>
                        <a href="functions/concat.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>CONCAT_WS</td>
                    <td>Adds two or more expressions together with a separator.</td>
                    <td><code>SELECT CONCAT_WS(' - ', 'Fullname: ', full_name, 'Enrollment Date: ', enrollments) AS
                            studentEnrollemt FROM students;</code></td>
                    <td>
                        <a href="functions/concat_ws.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>FIELD</td>
                    <td>Returns the index position of a value in a list of values.</td>
                    <td><code>SELECT FIELD('a', 'b', 'c', 'd') AS fieldPosition;</code></td>
                    <td>
                        <a href="functions/field.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>FIND_IN_SET</td>
                    <td>Returns the position of a string within a list of strings.</td>
                    <td><code>SELECT FIND_IN_SET('b', 'a,b,c,d') AS fieldPosition;</code></td>
                    <td>
                        <a href="functions/find_in_set.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>FORMAT</td>
                    <td>Formats a number to a format like "#,###,###.##", rounded to a specified number of decimal
                        places.</td>
                    <td><code>SELECT FORMAT(1234567.89, 2) AS formattedNumber;</code></td>
                    <td>
                        <a href="functions/format.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>INSERT</td>
                    <td>Inserts a string within a string at the specified position and for a certain number of
                        characters.</td>
                    <td><code>SELECT INSERT('dnsc.edu', 1, 4, 'aces') AS insertedString;</code></td>
                    <td>
                        <a href="functions/insert.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>INSTR</td>
                    <td>Returns the position of the first occurrence of a string in another string.</td>
                    <td><code>SELECT INSTR('dnsc.edu', 'c') AS matchPosition;</code></td>
                    <td>
                        <a href="functions/instr.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LCASE</td>
                    <td>Converts a string to lower-case.</td>
                    <td><code>SELECT LCASE(full_name) AS lowerCaseName FROM students;</code></td>
                    <td>
                        <a href="functions/lcase.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LEFT</td>
                    <td>Extracts a number of characters from a string (starting from left).</td>
                    <td><code>SELECT LEFT(full_name, 3) AS extractString FROM students;</code></td>
                    <td>
                        <a href="functions/left.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LENGTH</td>
                    <td>Returns the length of a string (in bytes).</td>
                    <td><code>SELECT LENGTH(full_name) AS lengthString FROM students;</code></td>
                    <td>
                        <a href="functions/length.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LOCATE</td>
                    <td>Returns the position of the first occurrence of a substring in a string.</td>
                    <td><code>SELECT LOCATE('a', full_name) AS matchPosition FROM students;</code></td>
                    <td>
                        <a href="functions/locate.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LOWER</td>
                    <td>Converts a string to lower-case.</td>
                    <td><code>SELECT LOWER(institute) AS lowerString FROM students;</code></td>
                    <td>
                        <a href="functions/lower.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LPAD</td>
                    <td>Left-pads a string with another string, to a certain length.</td>
                    <td><code>SELECT LPAD(institute, 25, 'institute') AS lpadString FROM students;</code></td>
                    <td>
                        <a href="functions/lpad.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>LTRIM</td>
                    <td>Removes leading spaces from a string.</td>
                    <td><code>SELECT LTRIM(' Hello World') AS ltrimString FROM students;</code></td>
                    <td>
                        <a href="functions/ltrim.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>MID</td>
                    <td>Extracts a substring from a string (starting at any position).</td>
                    <td><code>SELECT MID(full_name, 1, 5) AS midString FROM students;</code></td>
                    <td>
                        <a href="functions/mid.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>POSITION</td>
                    <td>Returns the position of the first occurrence of a substring in a string.</td>
                    <td><code>SELECT POSITION('a' IN full_name) AS positionOfA FROM students;</code></td>
                    <td>
                        <a href="functions/position.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>REPEAT</td>
                    <td>Repeats a string as many times as specified.</td>
                    <td><code>SELECT REPEAT('Hello', 3) AS repeatString FROM students;</code></td>
                    <td>
                        <a href="functions/repeat.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>REPLACE</td>
                    <td>Replaces all occurrences of a substring within a string, with a new substring.</td>
                    <td><code>SELECT REPLACE(major, 'Information Technology', 'Information Gathering') AS replaceString
                            FROM students;</code></td>
                    <td>
                        <a href="functions/replace.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>REVERSE</td>
                    <td>Reverses a string and returns the result.</td>
                    <td><code>SELECT REVERSE(major) AS reverseString FROM students;</code></td>
                    <td>
                        <a href="functions/reverse.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>RIGHT</td>
                    <td>Extracts a number of characters from a string (starting from right).</td>
                    <td><code>SELECT RIGHT(major, 8) AS rightString FROM students;</code></td>
                    <td>
                        <a href="functions/right.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>RPAD</td>
                    <td>Right-pads a string with another string, to a certain length.</td>
                    <td><code>SELECT RPAD(institute, 25, 'institute') AS rpadString FROM students;</code></td>
                    <td>
                        <a href="functions/rpad.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>RTRIM</td>
                    <td>Removes trailing spaces from a string.</td>
                    <td><code>SELECT RTRIM('Hello World ') AS rtrimString FROM students;</code></td>
                    <td>
                        <a href="functions/rtrim.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>SPACE</td>
                    <td>Returns a string of the specified number of space characters.</td>
                    <td><code>SELECT SPACE(5) AS spaceString;</code></td>
                    <td>
                        <a href="functions/space.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>STRCMP</td>
                    <td>Compares two strings.</td>
                    <td><code>SELECT STRCMP('Hello', 'World') AS compareStrings;</code></td>
                    <td>
                        <a href="functions/strncmp.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>SUBSTR</td>
                    <td>Extracts a substring from a string (starting at any position).</td>
                    <td><code>SELECT SUBSTR(institute, 1, 3) AS subStrings FROM students;</code></td>
                    <td>
                        <a href="functions/substr.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>SUBSTRING</td>
                    <td>Extracts a substring from a string (starting at any position).</td>
                    <td><code>SELECT SUBSTRING(institute, 1, 7) AS subStrings FROM students;</code></td>
                    <td>
                        <a href="functions/substring.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>SUBSTRING_INDEX</td>
                    <td>Returns a substring of a string before a specified number of delimiter occurs.</td>
                    <td><code>SELECT SUBSTRING_INDEX(institute, ' ', 1) AS subStringIndex FROM students;</code></td>
                    <td>
                        <a href="functions/substring_index.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>TRIM</td>
                    <td>Removes leading and trailing spaces from a string.</td>
                    <td><code>SELECT TRIM(' HAHAHAHA ') AS trimString FROM students;</code></td>
                    <td>
                        <a href="functions/trim.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>UCASE</td>
                    <td>Converts a string to upper-case.</td>
                    <td><code>SELECT UCASE(full_name) AS ucaseFullname FROM students;</code></td>
                    <td>
                        <a href="functions/ucase.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td>UPPER</td>
                    <td>Converts a string to upper-case.</td>
                    <td><code>SELECT UPPER(full_name) AS upperFullname FROM students;</code></td>
                    <td>
                        <a href="functions/upper.php" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <pre>

                        </pre>
                    </td>
                </tr>

                <tr>
                    <th>MySQL Numeric Functions</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>ABS</td>
                    <td>Returns the absolute value of a number.</td>
                    <td><code>SELECT ABS(-gwa) AS absValue FROM students;</code></td>
                    <td><a href="functions/abs.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ACOS</td>
                    <td>Returns the arc cosine of a number.</td>
                    <td><code>SELECT ACOS(0.5) AS acosValue;</code></td>
                    <td><a href="functions/acos.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ASIN</td>
                    <td>Returns the arc sine of a number.</td>
                    <td><code>SELECT ASIN(0.5) AS asinValue;</code></td>
                    <td><a href="functions/asin.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ATAN</td>
                    <td>Returns the arc tangent of a number.</td>
                    <td><code>SELECT ATAN(1) AS atanValue;</code></td>
                    <td><a href="functions/atan.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ATAN2</td>
                    <td>Returns the arc tangent of two numbers.</td>
                    <td><code>SELECT ATAN2(5, 10) AS atan2Value;</code></td>
                    <td><a href="functions/atan2.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>AVG</td>
                    <td>Returns the average value of an expression.</td>
                    <td><code>SELECT AVG(gwa) AS avgValue FROM students;</code></td>
                    <td><a href="functions/avg.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CEIL</td>
                    <td>Returns the smallest integer value that is >= a number.</td>
                    <td><code>SELECT CEIL(gwa) AS ceilValue FROM students;</code></td>
                    <td><a href="functions/ceil.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CEILING</td>
                    <td>Returns the smallest integer value that is >= a number.</td>
                    <td><code>SELECT CEILING(gwa) AS ceilingValue FROM students;</code></td>
                    <td><a href="functions/ceiling.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>COS</td>
                    <td>Returns the cosine of a number.</td>
                    <td><code>SELECT COS(1) AS cosValue;</code></td>
                    <td><a href="functions/cos.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>COT</td>
                    <td>Returns the cotangent of a number.</td>
                    <td><code>SELECT COT(1) AS cotValue;</code></td>
                    <td><a href="functions/cot.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>COUNT</td>
                    <td>Returns the number of records returned by a select query.</td>
                    <td><code>SELECT COUNT(*) AS countValue FROM students;</code></td>
                    <td><a href="functions/count.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DEGREES</td>
                    <td>Converts a value in radians to degrees.</td>
                    <td><code>SELECT DEGREES(1) AS degreesValue;</code></td>
                    <td><a href="functions/degrees.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DIV</td>
                    <td>Used for integer division.</td>
                    <td><code>SELECT id DIV 2 AS divValue FROM students;</code></td>
                    <td><a href="functions/div.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>EXP</td>
                    <td>Returns e raised to the power of a specified number.</td>
                    <td><code>SELECT EXP(gwa) AS expValue FROM students;</code></td>
                    <td><a href="functions/exp.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>FLOOR</td>
                    <td>Returns the largest integer value that is <= a number.</td>
                    <td><code>SELECT FLOOR(gwa) AS floorValue FROM students;</code></td>
                    <td><a href="functions/floor.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>GREATEST</td>
                    <td>Returns the greatest value of the list of arguments.</td>
                    <td><code>SELECT GREATEST(1.25, 2.50, 1.50) AS greatestValue;</code></td>
                    <td><a href="functions/greatest.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LEAST</td>
                    <td>Returns the smallest value of the list of arguments.</td>
                    <td><code>SELECT LEAST(1.25, 2.50, 1.50) AS leastValue;</code></td>
                    <td><a href="functions/least.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LN</td>
                    <td>Returns the natural logarithm of a number.</td>
                    <td><code>SELECT LN(gwa) AS lnValue FROM students;</code></td>
                    <td><a href="functions/ln.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LOG</td>
                    <td>Returns the logarithm of a number.</td>
                    <td><code>SELECT LOG(gwa) AS logValue FROM students;</code></td>
                    <td><a href="functions/log.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LOG10</td>
                    <td>Returns the logarithm base 10 of a number.</td>
                    <td><code>SELECT LOG10(gwa) AS log10Value FROM students;</code></td>
                    <td><a href="functions/log10.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LOG2</td>
                    <td>Returns the logarithm base 2 of a number.</td>
                    <td><code>SELECT LOG2(gwa) AS log2Value FROM students;</code></td>
                    <td><a href="functions/log2.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MAX</td>
                    <td>Returns the maximum value in a set of values.</td>
                    <td><code>SELECT MAX(gwa) AS maxValue FROM students;</code></td>
                    <td><a href="functions/max.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MIN</td>
                    <td>Returns the minimum value in a set of values.</td>
                    <td><code>SELECT MIN(gwa) AS minValue FROM students;</code></td>
                    <td><a href="functions/min.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MOD</td>
                    <td>Returns the remainder of a number divided by another number.</td>
                    <td><code>SELECT MOD(id, 2) AS modValue FROM students;</code></td>
                    <td><a href="functions/mod.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>PI</td>
                    <td>Returns the value of PI.</td>
                    <td><code>SELECT PI() AS piValue;</code></td>
                    <td><a href="functions/pi.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>POW</td>
                    <td>Returns the value of a number raised to the power of another number.</td>
                    <td><code>SELECT POW(gwa, 2) AS powValue FROM students;</code></td>
                    <td><a href="functions/pow.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>POWER</td>
                    <td>Returns the value of a number raised to the power of another number.</td>
                    <td><code>SELECT POWER(gwa, 2) AS powerValue FROM students;</code></td>
                    <td><a href="functions/power.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>RADIANS</td>
                    <td>Converts a degree value into radians.</td>
                    <td><code>SELECT RADIANS(180) AS radiansValue;</code></td>
                    <td><a href="functions/radians.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>RAND</td>
                    <td>Returns a random number.</td>
                    <td><code>SELECT RAND() AS randValue;</code></td>
                    <td><a href="functions/rand.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ROUND</td>
                    <td>Rounds a number to a specified number of decimal places.</td>
                    <td><code>SELECT ROUND(gwa, 1) AS roundValue FROM students;</code></td>
                    <td><a href="functions/round.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SIGN</td>
                    <td>Returns the sign of a number.</td>
                    <td><code>SELECT SIGN(gwa - 2.0) AS signValue FROM students;</code></td>
                    <td><a href="functions/sign.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SIN</td>
                    <td>Returns the sine of a number.</td>
                    <td><code>SELECT SIN(1) AS sinValue;</code></td>
                    <td><a href="functions/sin.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SQRT</td>
                    <td>Returns the square root of a number.</td>
                    <td><code>SELECT SQRT(gwa) AS sqrtValue FROM students;</code></td>
                    <td><a href="functions/sqrt.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SUM</td>
                    <td>Calculates the sum of a set of values.</td>
                    <td><code>SELECT SUM(gwa) AS sumValue FROM students;</code></td>
                    <td><a href="functions/sum.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TAN</td>
                    <td>Returns the tangent of a number.</td>
                    <td><code>SELECT TAN(1) AS tanValue;</code></td>
                    <td><a href="functions/tan.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TRUNCATE</td>
                    <td>Truncates a number to the specified number of decimal places.</td>
                    <td><code>SELECT TRUNCATE(gwa, 1) AS truncateValue FROM students;</code></td>
                    <td><a href="functions/truncate.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <pre>

                        </pre>
                    </td>
                </tr>

                <tr>
                    <th>MySQL Date Functions</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>ADDDATE</td>
                    <td>Adds a time/date interval to a date and returns the date.</td>
                    <td><code>SELECT ADDDATE(enrollment_date, INTERVAL 10 DAY) AS addDateValue FROM students;</code>
                    </td>
                    <td><a href="functions/adddate.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ADDTIME</td>
                    <td>Adds a time interval to a datetime and returns the result.</td>
                    <td><code>SELECT ADDTIME(NOW(), '02:00:00') AS addTimeValue;</code></td>
                    <td><a href="functions/addtime.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CURDATE</td>
                    <td>Returns the current date.</td>
                    <td><code>SELECT CURDATE() AS curDateValue;</code></td>
                    <td><a href="functions/curdate.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CURRENT_DATE</td>
                    <td>Returns the current date.</td>
                    <td><code>SELECT CURRENT_DATE() AS currentDateValue;</code></td>
                    <td><a href="functions/current_date.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CURRENT_TIME</td>
                    <td>Returns the current time.</td>
                    <td><code>SELECT CURRENT_TIME() AS currentTimeValue;</code></td>
                    <td><a href="functions/current_time.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CURRENT_TIMESTAMP</td>
                    <td>Returns the current date and time.</td>
                    <td><code>SELECT CURRENT_TIMESTAMP() AS currentTimestampValue;</code></td>
                    <td><a href="functions/current_timestamp.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CURTIME</td>
                    <td>Returns the current time.</td>
                    <td><code>SELECT CURTIME() AS curTimeValue;</code></td>
                    <td><a href="functions/curtime.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DATE</td>
                    <td>Extracts the date part from a datetime expression.</td>
                    <td><code>SELECT DATE(NOW()) AS dateValue;</code></td>
                    <td><a href="functions/date.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DATEDIFF</td>
                    <td>Returns the number of days between two dates.</td>
                    <td><code>SELECT DATEDIFF(CURDATE(), enrollment_date) AS dateDiffValue FROM students;</code></td>
                    <td><a href="functions/datediff.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DATE_ADD</td>
                    <td>Adds an interval to a date and returns the date.</td>
                    <td><code>SELECT DATE_ADD(enrollment_date, INTERVAL 1 MONTH) AS dateAddValue FROM students;</code>
                    </td>
                    <td><a href="functions/date_add.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DATE_FORMAT</td>
                    <td>Formats a date.</td>
                    <td><code>SELECT DATE_FORMAT(enrollment_date, '%M %d, %Y') AS formattedDate FROM students;</code>
                    </td>
                    <td><a href="functions/date_format.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DATE_SUB</td>
                    <td>Subtracts an interval from a date and returns the date.</td>
                    <td><code>SELECT DATE_SUB(enrollment_date, INTERVAL 5 DAY) AS dateSubValue FROM students;</code>
                    </td>
                    <td><a href="functions/date_sub.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DAY</td>
                    <td>Returns the day of the month for a date.</td>
                    <td><code>SELECT DAY(enrollment_date) AS dayValue FROM students;</code></td>
                    <td><a href="functions/day.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DAYNAME</td>
                    <td>Returns the weekday name for a date.</td>
                    <td><code>SELECT DAYNAME(enrollment_date) AS dayNameValue FROM students;</code></td>
                    <td><a href="functions/dayname.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DAYOFMONTH</td>
                    <td>Returns the day of the month for a date.</td>
                    <td><code>SELECT DAYOFMONTH(enrollment_date) AS dayOfMonthValue FROM students;</code></td>
                    <td><a href="functions/dayofmonth.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DAYOFWEEK</td>
                    <td>Returns the weekday index for a date.</td>
                    <td><code>SELECT DAYOFWEEK(enrollment_date) AS dayOfWeekValue FROM students;</code></td>
                    <td><a href="functions/dayofweek.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DAYOFYEAR</td>
                    <td>Returns the day of the year for a date.</td>
                    <td><code>SELECT DAYOFYEAR(enrollment_date) AS dayOfYearValue FROM students;</code></td>
                    <td><a href="functions/dayofyear.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>EXTRACT</td>
                    <td>Extracts a part from a given date.</td>
                    <td><code>SELECT EXTRACT(YEAR FROM enrollment_date) AS extractYear FROM students;</code></td>
                    <td><a href="functions/extract.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>FROM_DAYS</td>
                    <td>Returns a date from a numeric datevalue.</td>
                    <td><code>SELECT FROM_DAYS(738000) AS fromDaysValue;</code></td>
                    <td><a href="functions/from_days.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>HOUR</td>
                    <td>Returns the hour part for a given datetime.</td>
                    <td><code>SELECT HOUR(NOW()) AS hourValue;</code></td>
                    <td><a href="functions/hour.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LAST_DAY</td>
                    <td>Returns the last day of the month for a date.</td>
                    <td><code>SELECT LAST_DAY(enrollment_date) AS lastDayValue FROM students;</code></td>
                    <td><a href="functions/last_day.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LOCALTIME</td>
                    <td>Returns the current date and time.</td>
                    <td><code>SELECT LOCALTIME() AS localTimeValue;</code></td>
                    <td><a href="functions/localtime.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LOCALTIMESTAMP</td>
                    <td>Returns the current date and time.</td>
                    <td><code>SELECT LOCALTIMESTAMP() AS localTimestampValue;</code></td>
                    <td><a href="functions/localtimestamp.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MAKEDATE</td>
                    <td>Creates and returns a date from year and day number.</td>
                    <td><code>SELECT MAKEDATE(2025, 100) AS makeDateValue;</code></td>
                    <td><a href="functions/makedate.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MAKETIME</td>
                    <td>Creates and returns a time from hour, minute, second.</td>
                    <td><code>SELECT MAKETIME(10, 30, 45) AS makeTimeValue;</code></td>
                    <td><a href="functions/maketime.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MICROSECOND</td>
                    <td>Returns the microsecond part of a datetime.</td>
                    <td><code>SELECT MICROSECOND(NOW()) AS microValue;</code></td>
                    <td><a href="functions/microsecond.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MINUTE</td>
                    <td>Returns the minute part of a datetime.</td>
                    <td><code>SELECT MINUTE(NOW()) AS minuteValue;</code></td>
                    <td><a href="functions/minute.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MONTH</td>
                    <td>Returns the month part for a date.</td>
                    <td><code>SELECT MONTH(enrollment_date) AS monthValue FROM students;</code></td>
                    <td><a href="functions/month.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>MONTHNAME</td>
                    <td>Returns the name of the month for a date.</td>
                    <td><code>SELECT MONTHNAME(enrollment_date) AS monthNameValue FROM students;</code></td>
                    <td><a href="functions/monthname.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>NOW</td>
                    <td>Returns the current date and time.</td>
                    <td><code>SELECT NOW() AS nowValue;</code></td>
                    <td><a href="functions/now.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>PERIOD_ADD</td>
                    <td>Adds months to a period.</td>
                    <td><code>SELECT PERIOD_ADD(202401, 5) AS periodAddValue;</code></td>
                    <td><a href="functions/period_add.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>PERIOD_DIFF</td>
                    <td>Returns the difference between two periods.</td>
                    <td><code>SELECT PERIOD_DIFF(202412, 202401) AS periodDiffValue;</code></td>
                    <td><a href="functions/period_diff.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>QUARTER</td>
                    <td>Returns the quarter of the year for a date.</td>
                    <td><code>SELECT QUARTER(enrollment_date) AS quarterValue FROM students;</code></td>
                    <td><a href="functions/quarter.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SECOND</td>
                    <td>Returns the seconds part of a datetime.</td>
                    <td><code>SELECT SECOND(NOW()) AS secondValue;</code></td>
                    <td><a href="functions/second.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SEC_TO_TIME</td>
                    <td>Returns time based on seconds.</td>
                    <td><code>SELECT SEC_TO_TIME(3600) AS secToTimeValue;</code></td>
                    <td><a href="functions/sec_to_time.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>STR_TO_DATE</td>
                    <td>Returns a date from a string format.</td>
                    <td><code>SELECT STR_TO_DATE('2025-02-04', '%Y-%m-%d') AS strDateValue;</code></td>
                    <td><a href="functions/str_to_date.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SUBDATE</td>
                    <td>Subtracts an interval from a date.</td>
                    <td><code>SELECT SUBDATE(enrollment_date, INTERVAL 10 DAY) AS subDateValue FROM students;</code>
                    </td>
                    <td><a href="functions/subdate.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SUBTIME</td>
                    <td>Subtracts a time interval from a datetime.</td>
                    <td><code>SELECT SUBTIME(NOW(), '01:00:00') AS subTimeValue;</code></td>
                    <td><a href="functions/subtime.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SYSDATE</td>
                    <td>Returns the current date and time.</td>
                    <td><code>SELECT SYSDATE() AS sysDateValue;</code></td>
                    <td><a href="functions/sysdate.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TIME</td>
                    <td>Extracts the time part from a datetime.</td>
                    <td><code>SELECT TIME(NOW()) AS timeValue;</code></td>
                    <td><a href="functions/time.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TIME_FORMAT</td>
                    <td>Formats a time by a specified format.</td>
                    <td><code>SELECT TIME_FORMAT(NOW(), '%H:%i:%s') AS timeFormatValue;</code></td>
                    <td><a href="functions/time_format.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TIME_TO_SEC</td>
                    <td>Converts a time value into seconds.</td>
                    <td><code>SELECT TIME_TO_SEC('01:00:00') AS timeToSecValue;</code></td>
                    <td><a href="functions/time_to_sec.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TIMEDIFF</td>
                    <td>Returns the difference between two time expressions.</td>
                    <td><code>SELECT TIMEDIFF(NOW(), enrollment_date) AS timeDiffValue FROM students;</code></td>
                    <td><a href="functions/timediff.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TIMESTAMP</td>
                    <td>Returns a datetime value based on date.</td>
                    <td><code>SELECT TIMESTAMP(enrollment_date) AS timestampValue FROM students;</code></td>
                    <td><a href="functions/timestamp.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>TO_DAYS</td>
                    <td>Returns number of days since year 0.</td>
                    <td><code>SELECT TO_DAYS(enrollment_date) AS toDaysValue FROM students;</code></td>
                    <td><a href="functions/to_days.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>WEEK</td>
                    <td>Returns the week number for a date.</td>
                    <td><code>SELECT WEEK(enrollment_date) AS weekValue FROM students;</code></td>
                    <td><a href="functions/week.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>WEEKDAY</td>
                    <td>Returns the weekday number for a date.</td>
                    <td><code>SELECT WEEKDAY(enrollment_date) AS weekdayValue FROM students;</code></td>
                    <td><a href="functions/weekday.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>WEEKOFYEAR</td>
                    <td>Returns the week number of the year for a date.</td>
                    <td><code>SELECT WEEKOFYEAR(enrollment_date) AS weekOfYearValue FROM students;</code></td>
                    <td><a href="functions/weekofyear.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>YEAR</td>
                    <td>Returns the year part for a date.</td>
                    <td><code>SELECT YEAR(enrollment_date) AS yearValue FROM students;</code></td>
                    <td><a href="functions/year.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>YEARWEEK</td>
                    <td>Returns year and week number for a date.</td>
                    <td><code>SELECT YEARWEEK(enrollment_date) AS yearWeekValue FROM students;</code></td>
                    <td><a href="functions/yearweek.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <pre>

                        </pre>
                    </td>
                </tr>

                <tr>
                    <th>MySQL Advanced Functions</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>BIN</td>
                    <td>Returns a binary representation of a number.</td>
                    <td><code>SELECT BIN(10) AS binValue;</code></td>
                    <td><a href="functions/bin.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>BINARY</td>
                    <td>Converts a value to a binary string.</td>
                    <td><code>SELECT BINARY 'Hello' AS binaryValue;</code></td>
                    <td><a href="binary.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CASE</td>
                    <td>Goes through conditions and returns a value when the first condition is met.</td>
                    <td><code>SELECT full_name, CASE WHEN institute='ILEGG' THEN 'Yes' ELSE 'Not' END AS caseValue FROM students;</code></td>
                    <td><a href="functions/case.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CAST</td>
                    <td>Converts a value into a specified datatype.</td>
                    <td><code>SELECT CAST(enrollment_date AS CHAR) AS castValue FROM students;</code></td>
                    <td><a href="functions/cast.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>COALESCE</td>
                    <td>Returns the first non-null value in a list.</td>
                    <td><code>SELECT COALESCE(NULL, full_name, 'No Name') AS coalesceValue FROM students;</code></td>
                    <td><a href="functions/coalesce.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CONNECTION_ID</td>
                    <td>Returns the unique connection ID for the current connection.</td>
                    <td><code>SELECT CONNECTION_ID() AS connectionIdValue;</code></td>
                    <td><a href="functions/connection_id.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CONV</td>
                    <td>Converts a number from one numeric base system to another.</td>
                    <td><code>SELECT CONV(15, 10, 2) AS convValue;</code></td>
                    <td><a href="functions/conv.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CONVERT</td>
                    <td>Converts a value into the specified datatype or character set.</td>
                    <td><code>SELECT CONVERT(full_name USING utf8) AS convertValue FROM students;</code></td>
                    <td><a href="functions/convert.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>CURRENT_USER</td>
                    <td>Returns the user name and host name of the authenticated account.</td>
                    <td><code>SELECT CURRENT_USER() AS currentUserValue;</code></td>
                    <td><a href="functions/current_user.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>DATABASE</td>
                    <td>Returns the name of the current database.</td>
                    <td><code>SELECT DATABASE() AS databaseValue;</code></td>
                    <td><a href="functions/database.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>IF</td>
                    <td>Returns a value if condition is TRUE, otherwise returns another value.</td>
                    <td><code>SELECT full_name, IF(institute='IC','Yes','No') AS ifValue FROM students;</code></td>
                    <td><a href="functions/if.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>IFNULL</td>
                    <td>Returns a value if expression is NULL, otherwise returns the expression.</td>
                    <td><code>SELECT IFNULL(NULL, 'Default Value') AS ifNullValue;</code></td>
                    <td><a href="functions/ifnull.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>ISNULL</td>
                    <td>Returns 1 or 0 depending on whether an expression is NULL.</td>
                    <td><code>SELECT ISNULL(NULL) AS isNullValue;</code></td>
                    <td><a href="functions/isnull.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>LAST_INSERT_ID</td>
                    <td>Returns the AUTO_INCREMENT id of the last inserted row.</td>
                    <td><code>SELECT LAST_INSERT_ID() AS lastInsertIdValue;</code></td>
                    <td><a href="functions/last_insert_id.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>NULLIF</td>
                    <td>Returns NULL if two expressions are equal, otherwise returns the first expression.</td>
                    <td><code>SELECT NULLIF(10, 10) AS nullIfValue;</code></td>
                    <td><a href="functions/nullif.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SESSION_USER</td>
                    <td>Returns the current MySQL user name and host name.</td>
                    <td><code>SELECT SESSION_USER() AS sessionUserValue;</code></td>
                    <td><a href="functions/session_user.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>SYSTEM_USER</td>
                    <td>Returns the current MySQL user name and host name.</td>
                    <td><code>SELECT SYSTEM_USER() AS systemUserValue;</code></td>
                    <td><a href="functions/system_user.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>USER</td>
                    <td>Returns the current MySQL user name and host name.</td>
                    <td><code>SELECT USER() AS userValue;</code></td>
                    <td><a href="functions/user.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td>VERSION</td>
                    <td>Returns the current version of the MySQL database.</td>
                    <td><code>SELECT VERSION() AS versionValue;</code></td>
                    <td><a href="functions/version.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <pre>

                        </pre>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>
