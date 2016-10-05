
$(document).ready( function() {
$(".sidemenu").fly_sidemenu({
btnContent: "=", // This option let you define what appears inside the side menu button. You can add your custom icon here. This option accepts all HTML tags. The default value is "=" string.
position: "left", // This option will let you define where the sidebar will appear on the page. Available options are "top", "left", "right", "bottom". The default value is "left"
customSelector: "li", // In case you do not want to use lists, simply define your own css selector here. The default value is "li".
hideButton: false // You can disable the auto creation of toggle button by changing this to true. The default value is false.
});
});
