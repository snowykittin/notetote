<?php
/*
 * Author: Louie Zhu
 * Date: Jun 27, 2015
 * File: error.php
 * Description: This script displays an error message.
 *
 */

$page_title = "PHP Online Bookstore Error";
require_once 'includes/header.php';

$error='Default error.';
if(isset($_GET['m'])) {
    $error = trim($_GET['m']);
}
?>
    <h2>Error</h2>

    <table style="width: 100%; border: none">
        <tr>
            <td style="text-align: left; vertical-align: top;">
                <h3>Sorry, but an error has occurred.</h3>
                <div style="color: red">
                    <?= $error ?>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <br><br><br><br><br>
<?php
require_once 'includes/footer.php';
