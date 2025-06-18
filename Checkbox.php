<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Program</title>
</head>

<body>
    <form action="" method="get">
        <label for="str">Enter string : </label>
        <input type="text" name="strg" id="str" required><br>
        <table border="2px">
            <tr>
                <th>Checkboxes</th>
                <th>Method</th>
                <th>Description</th>
                <th>Output</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk1" value="set">METHOD 1</td>
                <td>strtoupper()</td>
                <td>Converts the given string to upper case.</td>
                <td>
                    <?php
                    if (isset($_GET['btn']) && isset($_GET['chk1'])) {
                        $str = $_GET['strg'];
                        $output = strtoupper($str);
                        echo htmlspecialchars($output);
                    } else {
                        echo htmlspecialchars("Not Checked");
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk2" value="set">METHOD 2</td>
                <td>strtolower()</td>
                <td>Converts the given string to lower case.</td>
                <td>
                    <?php
                    if (isset($_GET['btn']) && isset($_GET['chk2'])) {
                        $str = $_GET['strg'];
                        $output = strtolower($str);
                        echo htmlspecialchars($output);
                    } else {
                        echo htmlspecialchars("Not Checked");
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk3" value="set">METHOD 3</td>
                <td>strrev()</td>
                <td>Reverses the current string.</td>
                <td>
                    <?php
                    if (isset($_GET['btn']) && isset($_GET['chk3'])) {
                        $str = $_GET['strg'];
                        $output = strrev($str);
                        echo htmlspecialchars($output);
                    } else {
                        echo htmlspecialchars("Not Checked");
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk4" value="set">METHOD 4</td>
                <td>str_shuffle()</td>
                <td>Generates random string from the given string.</td>
                <td>
                    <?php
                    if (isset($_GET['btn']) && isset($_GET['chk4'])) {
                        $str = $_GET['strg'];
                        $output = str_shuffle($str);
                        echo htmlspecialchars($output);
                    } else {
                        echo htmlspecialchars("Not Checked");
                    }
                    ?>
                </td>
            </tr>
        </table>
        <input type="submit" value="Generate Output" name="btn">
    </form>
</body>

</html>