document.getElementById('submitButton').addEventListener('click', function () {

    const input = document.getElementById('username');
    const msg = document.getElementById('message');
    const username = input.value.trim();

    if (username === '') {
        msg.textContent = 'Please enter a username';
        msg.classList.add('error');
        return;
    }

    // Send AJAX POST request to info.php
    fetch('info.php', {
        method: 'POST',  
       
        // Fetch data in url encoded format
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
       
        // Convert JavaScript object to form-style body
        body: new URLSearchParams({ username: username })
    })

        // Convert into plain text
        .then(response => response.text())
        .then(text => {

            msg.textContent = text;
            msg.className = '';

            if (text.trim().toLowerCase() === 'verified') {
                msg.classList.add('verified');
            }
            else {
                msg.classList.add('error');
            }
        })

        // Incase network failure
        .catch(error => {
            msg.textContent = 'Something went wrong';
            msg.className = 'error';
        });
});
