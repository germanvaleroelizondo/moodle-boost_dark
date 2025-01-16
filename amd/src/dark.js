define(["jquery", "core/ajax"], function($, ajax) {
    return {
        init: function() {
            var $layoutdark = $(".kraus-layout-dark div");
            $layoutdark.click(function() {

                $("body").addClass("dark-animation");
                setTimeout(function() {
                    $("body").removeClass("dark-animation");
                }, 500);

                var darkmode = "dark";
                if ($("html").attr("data-bs-theme") == "dark") {
                    darkmode = "light";
                }
                $("html").attr("data-bs-theme", darkmode);

                ajax.call([{
                    methodname: "local_boost_dark_userpreference",
                    args: {darkmode: darkmode}
                }]);
            });
        }
    };
});
