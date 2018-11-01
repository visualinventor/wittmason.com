// Look ma, [very little] Javascript!
document.querySelector('#menu-toggle').addEventListener('click', function() {
  document.querySelector('menu').classList.toggle('collapsed');
  document.querySelector('#menu-toggle').classList.toggle('active');
});
