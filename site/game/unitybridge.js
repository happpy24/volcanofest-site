var unityInstance;

function UnityProgress(unityInstance, progress) {
    // Handle progress updates if needed
}

// Function to retrieve the value from session storage and send it to Unity
function RetrieveAndSendNameToUnity() {
    // Retrieve the value of the 'name' variable from session storage
    var name = sessionStorage.getItem('name');

    // Send the 'name' value to Unity
    if (unityInstance) {
        unityInstance.SendMessage('JavascriptHook', 'ReceiveName', name);
    } else {
        console.error("Unity instance not found. Unable to send message.");
    }
}