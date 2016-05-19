<?

/* ROUTER           
================================================*/

$ROUTER->path((object) array(
    "url" => "/",
    "page" => "home"
));


$ROUTER->path((object) array(
    "url" => "test",
    "page" => "test",
    "layout" => "cool"
));


$ROUTER->path((object) array(
    "url" => "test/test",
    "page" => "test2",
    "layout" => "cool"
));

