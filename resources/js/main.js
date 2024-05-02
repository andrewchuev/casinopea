import 'flowbite'


document.querySelectorAll('.accordion').forEach(accordion => {
    const header = accordion.querySelector('.accordion-header');
    const panel = header.nextElementSibling;
    const icon = header.querySelector('svg');

    header.addEventListener('click', function() {
        if (panel.classList.contains('hidden')) {
            document.querySelectorAll('.panel').forEach(p => p.classList.add('hidden'));
            document.querySelectorAll('svg').forEach(i => i.style.transform = 'rotate(0deg)');
            panel.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            panel.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    });
});

