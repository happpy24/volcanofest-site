function UnityLoaded(unityInstance) {
    console.log("Unity instance loaded");
    const sessionName = sessionStorage.getItem('name');
    if (sessionName) {
        console.log("Sending session name to Unity: " + sessionName);
        unityInstance.SendMessage('JavascriptHook', 'ReceiveName', sessionName);
    } else {
        console.log("No session name found in session storage");
    }

    function getCookie(name) {
        let value = `; ${document.cookie}`;
        let parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    const cookieCode = getCookie('code');
    if (cookieCode) {
        console.log("Sending cookie code to Unity: " + cookieCode);
        unityInstance.SendMessage('JavascriptHook', 'ReceiveCode', cookieCode);
    } else {
        console.log("No cookie code found");
    }
}