<?php
$page_security = 'SA_ONBOARDING'; $path_to_root = "../../..";
include_once($path_to_root . "/includes/session.inc");
include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/modules/FA_Onboarding/includes/onboarding_db.inc");
page(_("Onboarding"), false, false, "", "");
$plans = get_employee_plan($_SESSION["wa_user"]->employee_id);
if ($plans) {
    echo "<b>Start Date:</b> " . sql2date($plans['start_date']) . "<br>";
} else {
    echo "<i>No onboarding plan</i>";
}
end_page(true);