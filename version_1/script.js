let idleTimeout;

const resetIdleTimer = () => {
    clearTimeout(idleTimeout);
    idleTimeout = setTimeout(function() {
        window.location.reload();
    }, 3000); // 3 seconds of inactivity
};


document.addEventListener('mousemove', resetIdleTimer);
document.addEventListener('keydown', resetIdleTimer);
document.addEventListener('click', resetIdleTimer);

resetIdleTimer(); // Start the timer immediately


// forcus on text input field
window.onload = function() {
    document.getElementById("myInput").focus();
};


setInterval(function() {
    $('#history').load('previous_chat.php #history');
  }, 1500); //  1.5 seconds