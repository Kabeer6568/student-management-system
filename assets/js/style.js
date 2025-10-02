function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            const menu = document.getElementById('navMenu');
            const toggle = document.querySelector('.menu-toggle');
            
            if (!menu.contains(e.target) && !toggle.contains(e.target)) {
                menu.classList.remove('active');
            }
        });



        // Login Page

function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        function handleLogin(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            alert(`Login attempted with:\nEmail: ${email}`);
            // Add your login logic here
        }


        // Footer

        function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
        }

        document.addEventListener('click', function(e) {
            const menu = document.getElementById('navMenu');
            const toggle = document.querySelector('.menu-toggle');
            
            if (!menu.contains(e.target) && !toggle.contains(e.target)) {
                menu.classList.remove('active');
            }
        });

        function enableEdit() {
            document.getElementById('viewMode').style.display = 'none';
            document.getElementById('editMode').style.display = 'block';
        }

        function cancelEdit() {
            document.getElementById('editMode').style.display = 'none';
            document.getElementById('viewMode').style.display = 'block';
        }

        function saveProfile(event) {
            event.preventDefault();
            
            const name = document.getElementById('editName').value;
            const email = document.getElementById('editEmail').value;
            const course = document.getElementById('editCourse').value;
            
            document.getElementById('displayName').textContent = name;
            document.getElementById('displayEmail').textContent = email;
            document.getElementById('displayCourse').textContent = course;
            
            cancelEdit();
            alert('Profile updated successfully!');
        }

        function handleLogout() {
            if (confirm('Are you sure you want to logout?')) {
                alert('Logging out...');
                window.location.href = 'login.html';
            }
        }