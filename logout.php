<?php
include_once ('lib/session.php');
session::init();
session::setNull('login');
session::setNull('userName');
session::setNull('userId');
session::setNull('versityId');
session::setNull('logInMsg');
session::end();

header('Location: index.php');
exit();