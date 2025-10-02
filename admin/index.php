<?php


include_once('../inc/header.php');

?>
    <!-- Header code goes here (you already have it) -->
    
    <!-- Main Content -->
    <main class="admin-main">
        <div class="dashboard-container">
            <h1 class="dashboard-heading">Admin Dashboard</h1>
            
            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Total Students</h3>
                    <p class="stat-number" id="totalStudents">5</p>
                </div>
                <div class="stat-card">
                    <h3>Active Courses</h3>
                    <p class="stat-number">6</p>
                </div>
                <div class="stat-card">
                    <h3>New This Month</h3>
                    <p class="stat-number">2</p>
                </div>
            </div>

            <!-- Actions Bar -->
            <div class="actions-bar">
                <button class="btn-add" onclick="openAddModal()">
                    <span>+</span> Add New Student
                </button>
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search students..." onkeyup="searchStudents()">
                </div>
            </div>

            <!-- Students Table -->
            <div class="table-container">
                <table class="students-table" id="studentsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="studentsTableBody">
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>Web Development</td>
                            <td class="actions-cell">
                                <button class="btn-action btn-edit" onclick="editStudent(1)" title="Edit">✏️</button>
                                <button class="btn-action btn-delete" onclick="deleteStudent(1)" title="Delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>Data Science</td>
                            <td class="actions-cell">
                                <button class="btn-action btn-edit" onclick="editStudent(2)" title="Edit">✏️</button>
                                <button class="btn-action btn-delete" onclick="deleteStudent(2)" title="Delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mike Johnson</td>
                            <td>mike.j@example.com</td>
                            <td>UI/UX Design</td>
                            <td class="actions-cell">
                                <button class="btn-action btn-edit" onclick="editStudent(3)" title="Edit">✏️</button>
                                <button class="btn-action btn-delete" onclick="deleteStudent(3)" title="Delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Sarah Williams</td>
                            <td>sarah.w@example.com</td>
                            <td>Mobile Development</td>
                            <td class="actions-cell">
                                <button class="btn-action btn-edit" onclick="editStudent(4)" title="Edit">✏️</button>
                                <button class="btn-action btn-delete" onclick="deleteStudent(4)" title="Delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>David Brown</td>
                            <td>david.b@example.com</td>
                            <td>Digital Marketing</td>
                            <td class="actions-cell">
                                <button class="btn-action btn-edit" onclick="editStudent(5)" title="Edit">✏️</button>
                                <button class="btn-action btn-delete" onclick="deleteStudent(5)" title="Delete">🗑️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Add/Edit Student Modal -->
    <div class="modal" id="studentModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTitle">Add New Student</h2>
                <span class="close-btn" onclick="closeModal()">&times;</span>
            </div>
            <form id="studentForm" onsubmit="saveStudent(event)">
                <input type="hidden" id="studentId">
                
                <div class="form-group">
                    <label for="studentName">Full Name</label>
                    <input type="text" id="studentName" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="studentEmail">Email</label>
                    <input type="email" id="studentEmail" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="studentCourse">Course</label>
                    <select id="studentCourse" class="form-input" required>
                        <option value="">Select a course</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="Data Science">Data Science</option>
                        <option value="UI/UX Design">UI/UX Design</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Graphic Design">Graphic Design</option>
                    </select>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">Save Student</button>
                    <button type="button" class="btn-cancel" onclick="closeModal()">Cancel</button>
                </div>
            </form>
        </div>
    </div>

<?php

include_once('../inc/footer.php');

?>