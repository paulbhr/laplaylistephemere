function copy(element) {
  let link = document.getElementById(element);
  link.focus();
  link.select();
  document.execCommand('copy');
  alert('Lien copié dans le presse-papiers!')
}
