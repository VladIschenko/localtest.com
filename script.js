var data = [
    "", "","", "",
    "", "","",
    "","", "","",
    "456456", "","",
    "7","", "", "","",
    "","", "", "","",
    "","", "", "","",
    "","", "", "","",
    "","", "", "","",
    "","", "", "","",
    "","", "", "","",
    "1768", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""];

var forms = [
    "model", "version", "support", "device-id",
    "sta-ssid", "sta-password", "repeat-sta-password",
    "ap-ssid","ap-password", "server","static-ip-checkbox",
    "new-Thermometer", "position", "statement",
    "points11","points12","points13","points14","points15",
    "points21","points22","points23","points24","points25",
    "points31","points32","points33","points34","points35",
    "points41","points42","points43","points44","points45",
    "points51","points52","points53","points54","points55",
    "points61","points62","points63","points64","points65",
    "points71","points72","points73","points74","points75",
    "device-id11", "device-id12","device-id13", "device-id14", "device-id15",
    "device-id21", "device-id22","device-id23", "device-id24", "device-id25",
    "device-id31", "device-id32","device-id33", "device-id34", "device-id35",
    "device-id41", "device-id42","device-id43", "device-id44", "device-id45",
    "device-id51", "device-id52","device-id53", "device-id54", "device-id55",
    "device-id61", "device-id62","device-id63", "device-id64", "device-id65",
    "device-id71", "device-id72","device-id73", "device-id74", "device-id75",
    "ip-part1", "ip-part2", "ip-part3", "ip-part4",
    "mask-part1", "mask-part2", "mask-part3", "mask-part4"
];

for(i=0; i < forms.length; ++i)
{
    var test =  document.getElementById(forms[i]);
    // alert(test);
    if (typeof(test) != 'undefined' && test != null)
    {
        if(test.getAttribute('type') == 'checkbox')
        {
            test.checked = data[i];
        }else {
            if(test.getAttribute('class') == 'inf')
            {
                test.innerHTML = data[i];
            }else {
                test.value = data[i];
            }
        }

    }
}
