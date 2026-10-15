document.addEventListener('DOMContentLoaded', () => {
  const audio = document.getElementById('audioPlayer');
  const playButton = document.getElementById('playTrack');
  const title = document.getElementById('trackTitle');
  const artist = document.getElementById('trackArtist');
  const hint = document.getElementById('playerHint');
  const progress = document.getElementById('audioProgress');
  const elapsed = document.getElementById('elapsedTime');
  const duration = document.getElementById('durationTime');
  const album = document.getElementById('albumArt');
  if (!audio || !playButton) return;
  const tracks = [
    { title: 'Late Night Study', artist: 'Lo-Fi Radio · instrumental', src: '/assets/music/previews/rainy-night.mp3' },
    { title: 'Rainy Window', artist: 'Study Atmosphere · ambient', src: '/assets/music/previews/coffee-shop.mp3' },
    { title: 'Midnight Coding', artist: 'Lo-Fi Radio · instrumental', src: '/assets/music/previews/midnight-study.mp3' }
  ];
  let index = 0;
  const format = seconds => {
    if (!Number.isFinite(seconds)) return '--:--';
    return `${Math.floor(seconds / 60).toString().padStart(2, '0')}:${Math.floor(seconds % 60).toString().padStart(2, '0')}`;
  };
  function loadTrack(nextIndex) {
    index = (nextIndex + tracks.length) % tracks.length;
    const track = tracks[index];
    title.textContent = track.title;
    artist.textContent = track.artist;
    audio.src = track.src;
    audio.load();
    progress.style.width = '0%'; elapsed.textContent = '00:00'; duration.textContent = '--:--';
    hint.textContent = 'Add your own licensed audio files to public/assets/music/previews/ to enable playback.';
    playButton.textContent = '▶'; playButton.setAttribute('aria-label', 'Play');
    if (album) album.dataset.track = String(index);
  }
  async function togglePlayback() {
    if (!audio.src || audio.error) { hint.textContent = 'Audio file not found yet. Add an MP3 you own or are licensed to use in public/assets/music/previews/.'; return; }
    if (audio.paused) {
      try { await audio.play(); playButton.textContent = 'Ⅱ'; playButton.setAttribute('aria-label', 'Pause'); hint.textContent = 'Now playing. Enjoy your focus time.'; }
      catch (_) { hint.textContent = 'Playback could not start. Check that the audio file exists and is a supported format.'; }
    } else { audio.pause(); playButton.textContent = '▶'; playButton.setAttribute('aria-label', 'Play'); }
  }
  playButton.addEventListener('click', togglePlayback);
  document.getElementById('prevTrack')?.addEventListener('click', () => loadTrack(index - 1));
  document.getElementById('nextTrack')?.addEventListener('click', () => loadTrack(index + 1));
  audio.addEventListener('loadedmetadata', () => { duration.textContent = format(audio.duration); });
  audio.addEventListener('timeupdate', () => { elapsed.textContent = format(audio.currentTime); progress.style.width = Number.isFinite(audio.duration) && audio.duration ? `${audio.currentTime / audio.duration * 100}%` : '0%'; });
  audio.addEventListener('ended', () => loadTrack(index + 1));
  audio.addEventListener('error', () => { playButton.textContent = '▶'; playButton.setAttribute('aria-label', 'Play'); });
  loadTrack(0);
});
