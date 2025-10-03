<?php

session_start();

require_once "../classes/student.php";
include_once('../inc/header.php');

$student = new Student;
$student->pageVisible();


?>

    <!-- Main Content -->
    <main class="profile-main">
        <div class="profile-container">
            <!-- Profile Header -->
            <div class="profile-header">
                <div class="profile-avatar">
                    <div class="avatar-circle">JD</div>
                    <button class="change-avatar-btn">Change Photo</button>
                </div>
                <div class="profile-info">
                    <h1 class="profile-name">John Doe</h1>
                    <p class="profile-role">Student</p>
                </div>
            </div>

            <!-- Profile Content -->
            <div class="profile-content">
                <!-- View Mode -->
                <div class="profile-view" id="viewMode">
                    <div class="info-card">
                        <h2>Personal Information</h2>
                        <div class="info-grid">
                            <div class="info-item">
                                <label>Full Name</label>
                                <p id="displayName">John Doe</p>
                            </div>
                            <div class="info-item">
                                <label>Email</label>
                                <p id="displayEmail">john.doe@example.com</p>
                            </div>
                            <div class="info-item">
                                <label>Course</label>
                                <p id="displayCourse">Web Development</p>
                            </div>
                            <div class="info-item">
                                <label>Enrollment Date</label>
                                <p>January 15, 2024</p>
                            </div>
                        </div>
                        <button class="btn-edit" onclick="enableEdit()">Edit Profile</button>
                    </div>
                </div>

                <!-- Edit Mode -->
                <div class="profile-edit" id="editMode" style="display: none;">
                    <div class="info-card">
                        <h2>Edit Information</h2>
                        <form onsubmit="saveProfile(event)">
                            <div class="form-group">
                                <label for="editName">Full Name</label>
                                <input type="text" id="editName" class="form-input" value="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="editEmail">Email</label>
                                <input type="email" id="editEmail" class="form-input" value="john.doe@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="editCourse">Course</label>
                                <select id="editCourse" class="form-input" required>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile Development">Mobile Development</option>
                                    <option value="Data Science">Data Science</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-save">Save Changes</button>
                                <button type="button" class="btn-cancel" onclick="cancelEdit()">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Additional Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Courses Completed</h3>
                        <p class="stat-number">12</p>
                    </div>
                    <div class="stat-card">
                        <h3>Hours Learned</h3>
                        <p class="stat-number">156</p>
                    </div>
                    <div class="stat-card">
                        <h3>Certificates</h3>
                        <p class="stat-number">5</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    
    include_once('../inc/footer.php');

    ?>