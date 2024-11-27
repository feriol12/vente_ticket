
@extends('layouts.layoutAdmin')
@section('title','Admin dahboard')
            <!-- New Users Section -->
            @section('content')
            <div class="new-users">
                <h2>New Users</h2>
                <div class="user-list">
                    <div class="user">
                        {{-- <img src="images/review-1.jpg"> --}}
                    <img src="{{asset('images/review-1.jpg')}}">

                        <h2>Mera</h2>
                        <p>54 Min Ago</p>
                    </div>
                    <div class="user">
                        {{-- <img src="images/review-2.png"> --}}
                    <img src="{{asset('images/review-2.png')}}">

                        <h2>John</h2>
                        <p>3 Hours Ago</p>
                    </div>
                    <div class="user">
                        {{-- <img src="images/review-3.jpg"> --}}
                    <img src="{{asset('images/review-3.jpg')}}">

                        <h2>Ember</h2>
                        <p>6 Hours Ago</p>
                    </div>
                    <div class="user">
                        {{-- <img src="images/plus.png"> --}}
                    <img src="{{asset('images/plus.png')}}">

                        <h2>More</h2>
                        <p>New User</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            
         @endsection

            <!-- End of Nav -->

            @section('contentEnd')
            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>
         @endsection
