document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', function() {
        // Remueve la clase 'active' de todos los enlaces
        document.querySelectorAll('.navbar-nav .nav-link').forEach(l => l.classList.remove('active'));
        
        // Agrega la clase 'active' al enlace clickeado
        this.classList.add('active');
    });
});