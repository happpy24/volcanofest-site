function UnityLoaded(unityInstance) {
    console.log("Unity instance loaded");

    // Retrieve local storage value
    const localStorageName = localStorage.getItem('name');
    if (localStorageName) {
        console.log("Sending local storage name to Unity: " + localStorageName);
        unityInstance.SendMessage('WebGLReceiver', 'ReceiveName', localStorageName);
    } else {
        console.log("No name found in local storage");
    }

    // Retrieve cookie value
    function getCookie(name) {
        let value = `; ${document.cookie}`;
        let parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    const cookieCode = getCookie('code');
    if (cookieCode) {
        console.log("Sending cookie code to Unity: " + cookieCode);
        unityInstance.SendMessage('WebGLReceiver', 'ReceiveCode', cookieCode);
    } else {
        console.log("No code found in cookies");
    }
}