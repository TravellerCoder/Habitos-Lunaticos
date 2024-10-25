document.querySelectorAll('.individuality').forEach(individuality => {
    const h3 = individuality.querySelector('h3');
    const p = individuality.querySelector('p');

    h3.addEventListener('click', () => {
        // Ocultar todos los párrafos
        document.querySelectorAll('.individuality p').forEach(paragraph => {
            paragraph.style.display = 'none';
        });
        // Mostrar el párrafo correspondiente
        p.style.display = 'block';
    });

    p.addEventListener('click', () => {
        p.style.display = 'none';
    });
});