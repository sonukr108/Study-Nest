document.querySelectorAll('.unit-items li').forEach(li => {
    li.addEventListener('click', function () {
      document.querySelector('.unit-items li.active')?.classList.remove('active');
      this.classList.add('active');
    });
  });