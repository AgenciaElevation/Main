/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

//swal de exclusão
$(".excluir").click(function() {
    Swal.fire({
        title: "Você tem certeza?",
        text: "Não há como desfazer essa ação!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#888',
        confirmButtonText: 'Sim, Apagar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "processa-deleteUser.php?id=<?php echo $id ?>";
        }
    })
});