<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4</title>
    <style type="text/css">
        form{
            margin-left:30% ;
            margin-top: 3%;
        }

        .button{
            padding-left: 5px;
            padding-right: 10px;
            background: linear-gradient(to right, #ff512f 0, #dd2476 51%, #ff512f 100%);
            text-align: center;
            transition: 1s;
            color: white;
            width: 140px;
            font-weight: 600;
            border-radius: 4px;
            box-shadow: 0 0 5px red;
            background-size: 200% auto;
            display: block;
            font-family: monospace;
            margin-left: 6px;
        }
        .button:hover {
                background-position: right center;
                cursor: pointer;
            }
        label{
            margin-right: 5px;
            font-weight: bold;
        }

        input{
            font-family: 'Courier New',Courier,monospace;
            font-size: large;
            background:  bisque;
            color: darkcyan;
            font-weight: bold;
        }
        

            
    </style>
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1547623641-d2c56c03e2a7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80); background-repeat: no-repeat;background-size: 200%;">

    <h2 style="text-align: center; margin-top: 4%; background:linear-gradient(to right, #ff512f 0, #dd2476 51%, #ff512f 100%); ;">ASSIGNMENT-4</h2>
    <form method="post" >
        <table>
            <tr>
                <td>
                    <label for="md5">md5():</label>
                </td>
                <td colspan="2">
                    <input type="text" name="md5" id="md5" placeholder="Enter any string or number" size="42">
                </td>
                <td >
                    <input class="button" type="submit" formaction="md5.php" value="generate" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numf">Number_format():</label>
                </td>
                <td colspan="2">
                    <input type="text" name="numf" id="numf" size="42" placeholder="Enter any number">
                </td>
                <td >
                    <input class="button" type="submit" value="Number_format" formaction="numberformat.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ord">Ord():</label>
                </td>
                <td colspan="2">
                    <input type="text" name="ord" id="ord" size="42" placeholder="Enter any string or number">
                </td>
                <td >
                    <input class="button" type="submit" value="Ord()" formaction="ord.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="rtrim">Rtrim():</label>
                </td>
                <td >
                    <input type="text" name="rtrim" id="rtrim" placeholder="Enter any string">
                </td>
                <td >
                    <input type="text" name="rtrim1" id="rtrim1" placeholder="Enter sub string" >
                </td>
                <td >
                    <input class="button" type="submit" value="Rtrim()" formaction="rtrim.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="strR">str_replace():</label>
                </td>
                <td>
                    <input type="text" name="strR" id="strR" placeholder="Enter any string">
                </td>
                <td>
                    <input type="text" name="strR1" id="strR1" size="9" placeholder="Value">
                    <input type="text" name="rp" id="strR2" size="10" placeholder="Replace by">
                </td>
                <td >
                    <input class="button" type="submit" value="str_replace()" formaction="strR.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="strL">str_length():</label>
                </td>
                <td colspan="2">
                    <input type="text" name="strL" id="strL" size="42" placeholder="Enter any string">
                </td>
                <td >
                    <input class="button" type="submit" value="str_length()" formaction="strL.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="strc">Strcasecmp():</label>
                </td>
                <td>
                    <input type="text" name="strc" id="strc" placeholder="Enter First string">
                </td>
                <td>
                    <input type="text" name="strc1" id="strc1" placeholder="Enter Second string">
                </td>
                <td >
                    <input class="button" type="submit" value="Strcasecmp()" formaction="strc.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="strpos">Strrpose():</label>
                </td>
                <td>
                    <input type="text" name="strpos" id="strpos" placeholder="Enter any string">
                </td>
                <td>
                    <input type="text" name="pos" id="strpos1" placeholder="Enter sub string for index">
                </td>
                <td >
                    <input class="button" type="submit" value="Strrpose()" formaction="strpos.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="subs">Substr():</label>
                </td>
                <td>
                    <input type="text" name="subs" id="subs" placeholder="Enter any string">
                </td>
                <td>
                    <input type="number" name="index" id="subs1" placeholder="Enter starting Index">
                </td>
                <td >
                    <input class="button" type="submit" value="Substr()" formaction="subs.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="strlow">Strtolower():</label>
                </td>
                <td colspan="2">
                    <input type="text" name="strlow" id="strlow" size="42" placeholder="Enter string convert to lower">
                </td>
                <td >
                    <input class="button" type="submit" value="Strtolower()" formaction="strlow.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="bth">Bintohex():</label>
                </td>
                <td colspan="2">
                    <input type="text" name="bth" id="bth" size="42" placeholder="convert binary to hexadecimal">
                </td>
                <td >
                    <input class="button" type="submit" value="Bintohex()" formaction="bth.php">
                </td>
            </tr>
            <tr>
                <td>
                    <label  for="chop">Chop():</label>
                </td>
                <td>
                    <input type="text" name="chop" id="chop" placeholder="Enter any string">
                </td>
                <td>
                    <input type="text" name="chop1" id="chop1" placeholder="Enter character for chop"  >
                </td>
                <td >
                    <input class="button" type="submit" value="Chop()" formaction="chop.php">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>