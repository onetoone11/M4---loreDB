document.getElementById('sidebarToggle').addEventListener('change', (event) => 
        document.getElementById("sidebar").style.width = event.currentTarget.checked ? '200px' : '0px'
    );