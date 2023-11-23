document.addEventListener('DOMContentLoaded', function () {
    var links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            var targetId = this.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                var targetOffset = targetElement.offsetTop - 10;

                window.scrollTo({
                    top: targetOffset,
                    behavior: 'smooth'
                });
            }
        });
    });
});


        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('applicationForm');
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                
                const formData = new FormData(form);

                fetch('send.php', {
                    method: 'POST',
                    body: formData
                }) 
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        form.style.display = 'none';
                        document.getElementById('successMessage').style.display = 'block';
                    } else {
                        form.style.display = 'none';
                         document.getElementById('errorMessage').style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Произошла ошибка:', error);
                });
            });
        });
   