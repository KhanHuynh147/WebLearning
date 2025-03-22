function showMessage(value) {
    var message = "";
    switch (value) {
        case "1":
            message = "Tôi là số 1, cảm ơn đã chọn tôi";
            break;
        case "2":
            message = "Tôi là số 2, cảm ơn đã chọn tôi";
            break;
        case "3":
            message = "Tôi là số 3, cảm ơn đã chọn tôi";
            break;
        default:
            message = "Please select a radio button";
    }
    document.getElementById("message").innerHTML = message;
}