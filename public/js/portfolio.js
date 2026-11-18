// Project search (Projects page only)
const q = document.getElementById('q');
if (q) {
    const cards = [...document.querySelectorAll('.card')];
    const count = document.getElementById('count');
    const empty = document.getElementById('empty');
    q.addEventListener('input', () => {
        const terms = q.value.toLowerCase().split(/\s+/).filter(Boolean);
        let shown = 0;
        cards.forEach(c => {
            const hit = terms.every(t => c.dataset.search.includes(t));
            c.hidden = !hit;
            if (hit) shown++;
        });
        empty.hidden = shown !== 0;
        count.textContent = terms.length ? `${shown} of ${cards.length} projects match` : '';
    });
}
