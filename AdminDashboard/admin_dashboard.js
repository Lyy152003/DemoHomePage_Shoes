
const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar-hnm"),
    toggle = body.querySelector(".toggle-hnm"),
    modeSwitch = body.querySelector(".toggle-switch-hnm"),
    modeText = body.querySelector(".mode-text-hnm");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})
modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        modeText.innerText = "Chế độ sáng"
    }
    else {
        modeText.innerText = "Chế độ tối"
    }
});

$('.tab-content').hide();
$('.menu-hnm ul li a').click(function (event) {
    if ($(this).attr('href') == "#order-section") {
        $('.tab-content').hide();
        var content = $(this).attr('href');
        $(content).show();
    }
    else {
        $('.home-hnm').hide();
        var content = $(this).attr('href');
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        $(content).show();
        $(content).siblings('.tab-content').hide();
    }
});



