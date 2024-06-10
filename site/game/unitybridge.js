function UnityLoaded(unityInstance) {
    // Retrieve session storage value
    const sessionName = sessionStorage.getItem('name');
    if (sessionName) {
        unityInstance.SendMessage('WebGLReceiver', 'ReceiveName', sessionName);
    }

    // Retrieve cookie value
    function getCookie(name) {
        let value = `; ${document.cookie}`;
        let parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    const cookieCode = getCookie('code');
    if (cookieCode) {
        unityInstance.SendMessage('WebGLReceiver', 'ReceiveCode', cookieCode);
    }
}