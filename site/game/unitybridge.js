// This variable will store the Unity instance
var unityInstance;

// Function to retrieve the value from session storage and send it to Unity
function RetrieveAndSendValuesToUnity() {
    // Retrieve the value of the 'name' variable from session storage
    var name = sessionStorage.getItem('name');

    // Retrieve the value of the 'code' variable from cookies
    var code = getCookie('code');

    // Send the 'name' value to Unity
    if (unityInstance) {
        unityInstance.SendMessage('JavascriptHook', 'ReceiveName', name);
        unityInstance.SendMessage('JavascriptHook', 'ReceiveCode', code);
    } else {
        console.error("Unity instance not found. Unable to send message.");
    }
}

// Function to get a cookie value by name
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

// This function is called when Unity is fully loaded
function UnityLoaded(instance) {
    // Store the Unity instance for future use
    unityInstance = instance;

    // Call the function to retrieve and send the values to Unity
    RetrieveAndSendValuesToUnity();
}