window.addEventListener('DOMContentLoaded', event => {     //add an event with fonction arrow 

    const sidebarToggle = document.body.querySelector('#sidebarToggle');  // selcete a class in side by queryselctor
    if (sidebarToggle) {                                     // if sidebartoggle true 
        sidebarToggle.addEventListener('click', event => {             // when u click on event 
            event.preventDefault();                                     // default transoframtion 
            document.body.classList.toggle('sb-sidenav-toggled');        // add class for show the side bar 
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled')); 
        });
    }

});
