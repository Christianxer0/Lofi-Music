(() => {
  const vibes = {
    rainy: { name: 'Rainy night', color: '#7d739f' },
    coffee: { name: 'Cozy coffee shop', color: '#a77961' },
    library: { name: 'Quiet library', color: '#6d958b' },
    space: { name: 'Space station', color: '#7667b2' }
  };
  function applyVibe(vibe, save = true) {
    if (!vibes[vibe]) return;
    document.body.dataset.vibe = vibe;
    document.querySelectorAll('[data-vibe]').forEach(button => {
      if (button.tagName === 'BUTTON') button.classList.toggle('active', button.dataset.vibe === vibe);
    });
    const scene = document.querySelector('.room-scene');
    if (scene) {
      const backgrounds = {
        rainy: 'linear-gradient(180deg,#29314f,#5f6085 58%,#d19ba7)',
        coffee: 'linear-gradient(180deg,#483638,#93664f 58%,#d7ac83)',
        library: 'linear-gradient(180deg,#283e43,#57796c 58%,#b1b99a)',
        space: 'radial-gradient(circle at 70% 25%,#9c83d4 0 3px,transparent 4px),linear-gradient(180deg,#15182f,#37345e 60%,#79649c)'
      };
      scene.style.background = backgrounds[vibe];
    }
    const album = document.querySelector('.large-album');
    if (album) album.style.background = {
      rainy: 'radial-gradient(circle at 30% 20%,#b1a0cf,#5d5d88 40%,#242942 75%)',
      coffee: 'radial-gradient(circle at 30% 20%,#e4c09a,#966d5a 45%,#38282e 80%)',
      library: 'radial-gradient(circle at 30% 20%,#c1d1a7,#60877c 45%,#20353b 80%)',
      space: 'radial-gradient(circle at 30% 20%,#b6a3ee,#514e91 45%,#171a38 80%)'
    }[vibe];
    if (save) { try { localStorage.setItem('lofiVibe', vibe); } catch (_) {} }
  }
  document.addEventListener('DOMContentLoaded', () => {
    let initial = 'rainy';
    try { initial = localStorage.getItem('lofiVibe') || 'rainy'; } catch (_) {}
    applyVibe(initial, false);
    document.querySelectorAll('button[data-vibe]').forEach(button => button.addEventListener('click', () => applyVibe(button.dataset.vibe)));
  });
})();
