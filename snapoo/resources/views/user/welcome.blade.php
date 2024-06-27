@extends('layouts.user.app')
@section('contents')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{asset('user/assets/img/hero/h1_hero.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Find your <span>Next photo!</span> </h1>
                                <p>Pilih Paket Favoritmu</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- form -->
                            <form action="#" class="search-box">
                                <div class="input-form mb-30">
                                    <input type="text" placeholder="Pilih Paket Favoritmu?">
                                </div>
                                <div class="select-form mb-30">
                                    <div class="select-itms">
                                        <select name="paket" id="select1">

                                            <!-- <h4 class="box-title">Chandler</h4> -->
                                            <div class="calender-cont widget-calender">
                                                <div id="calendar" class="fc fc-unthemed fc-ltr">
                                                    <div class="fc-toolbar fc-header-toolbar">
                                                        <div class="fc-left">
                                                            <div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button>
                                                        </div>
                                                        <div class="fc-right">
                                                            <div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                                        </div>
                                                        <div class="fc-center">
                                                            <h2>March 2024</h2>
                                                        </div>
                                                        <div class="fc-clear"></div>
                                                    </div>
                                                    <div class="fc-view-container" style="">
                                                        <div class="fc-view fc-month-view fc-basic-view" style="">
                                                            <table class="">
                                                                <thead class="fc-head">
                                                                    <tr>
                                                                        <td class="fc-head-container fc-widget-header">
                                                                            <div class="fc-row fc-widget-header">
                                                                                <table class="">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fc-body">
                                                                    <tr>
                                                                        <td class="fc-widget-content">
                                                                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 398px;">
                                                                                <div class="fc-day-grid fc-unselectable">
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2024-02-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2024-02-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2024-02-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2024-02-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2024-02-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2024-03-01"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2024-03-02"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2024-02-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2024-02-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2024-02-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2024-02-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2024-02-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2024-03-01"><span class="fc-day-number">1</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-past" data-date="2024-03-02"><span class="fc-day-number">2</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2024-03-03"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2024-03-04"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2024-03-05"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2024-03-06"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2024-03-07"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-today " data-date="2024-03-08"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-09"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2024-03-03"><span class="fc-day-number">3</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2024-03-04"><span class="fc-day-number">4</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2024-03-05"><span class="fc-day-number">5</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2024-03-06"><span class="fc-day-number">6</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2024-03-07"><span class="fc-day-number">7</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-today " data-date="2024-03-08"><span class="fc-day-number">8</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-09"><span class="fc-day-number">9</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">4:18p</span> <span class="fc-title">See John Deo</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-10"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-11"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-12"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-13"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-14"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-15"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-16"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-10"><span class="fc-day-number">10</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-11"><span class="fc-day-number">11</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-12"><span class="fc-day-number">12</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-13"><span class="fc-day-number">13</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-14"><span class="fc-day-number">14</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-15"><span class="fc-day-number">15</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-16"><span class="fc-day-number">16</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-dark fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">12:11p</span> <span class="fc-title">Hey!</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">2:11p</span> <span class="fc-title">Buy a Theme</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-17"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-18"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-19"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-20"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-21"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-22"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-23"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-17"><span class="fc-day-number">17</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-18"><span class="fc-day-number">18</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-19"><span class="fc-day-number">19</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-20"><span class="fc-day-number">20</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-21"><span class="fc-day-number">21</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-22"><span class="fc-day-number">22</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-23"><span class="fc-day-number">23</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-24"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-30"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <th ead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-24"><span class="fc-day-number">24</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-30"><span class="fc-day-number">30</span></td>
                                                                                                    </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 68px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-31"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2024-04button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                                        </div>
                                                        <div class="fc-center">
                                                            <h2>March 2024</h2>
                                                        </div>
                                                        <div class="fc-clear"></div>
                                                    </div>
                                                    <div class="fc-view-container" style="">
                                                        <div class="fc-view fc-month-view fc-basic-view" style="">
                                                            <table class="">
                                                                <thead class="fc-head">
                                                                    <tr>
                                                                        <td class="fc-head-container fc-widget-header">
                                                                            <div class="fc-row fc-widget-header">
                                                                                <table class="">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fc-body">
                                                                    <tr>
                                                                        <td class="fc-widget-content">
                                                                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 398px;">
                                                                                <div class="fc-day-grid fc-unselectable">
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2024-02-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2024-02-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2024-02-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2024-02-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2024-02-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2024-03-01"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2024-03-02"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2024-02-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2024-02-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2024-02-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2024-02-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2024-02-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2024-03-01"><span class="fc-day-number">1</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-past" data-date="2024-03-02"><span class="fc-day-number">2</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2024-03-03"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2024-03-04"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2024-03-05"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2024-03-06"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2024-03-07"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-today " data-date="2024-03-08"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-09"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2024-03-03"><span class="fc-day-number">3</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2024-03-04"><span class="fc-day-number">4</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2024-03-05"><span class="fc-day-number">5</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2024-03-06"><span class="fc-day-number">6</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2024-03-07"><span class="fc-day-number">7</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-today " data-date="2024-03-08"><span class="fc-day-number">8</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-09"><span class="fc-day-number">9</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">4:18p</span> <span class="fc-title">See John Deo</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-10"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-11"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-12"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-13"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-14"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-15"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-16"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-10"><span class="fc-day-number">10</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-11"><span class="fc-day-number">11</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-12"><span class="fc-day-number">12</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-13"><span class="fc-day-number">13</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-14"><span class="fc-day-number">14</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-15"><span class="fc-day-number">15</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-16"><span class="fc-day-number">16</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-dark fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">12:11p</span> <span class="fc-title">Hey!</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">2:11p</span> <span class="fc-title">Buy a Theme</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-17"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-18"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-19"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-20"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-21"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-22"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-23"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-17"><span class="fc-day-number">17</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-18"><span class="fc-day-number">18</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-19"><span class="fc-day-number">19</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-20"><span class="fc-day-number">20</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-21"><span class="fc-day-number">21</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-22"><span class="fc-day-number">22</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-23"><span class="fc-day-number">23</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-24"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-30"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <th ead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-24"><span class="fc-day-number">24</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-30"><span class="fc-day-number">30</span></td>
                                                                                                    </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 68px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-31"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2024-04button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                                        </div>
                                                        <div class="fc-center">
                                                            <h2>March 2024</h2>
                                                        </div>
                                                        <div class="fc-clear"></div>
                                                    </div>
                                                    <div class="fc-view-container" style="">
                                                        <div class="fc-view fc-month-view fc-basic-view" style="">
                                                            <table class="">
                                                                <thead class="fc-head">
                                                                    <tr>
                                                                        <td class="fc-head-container fc-widget-header">
                                                                            <div class="fc-row fc-widget-header">
                                                                                <table class="">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fc-body">
                                                                    <tr>
                                                                        <td class="fc-widget-content">
                                                                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 398px;">
                                                                                <div class="fc-day-grid fc-unselectable">
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2024-02-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2024-02-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2024-02-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2024-02-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2024-02-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2024-03-01"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2024-03-02"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2024-02-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2024-02-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2024-02-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2024-02-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2024-02-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2024-03-01"><span class="fc-day-number">1</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-past" data-date="2024-03-02"><span class="fc-day-number">2</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2024-03-03"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2024-03-04"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2024-03-05"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2024-03-06"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2024-03-07"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-today " data-date="2024-03-08"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-09"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2024-03-03"><span class="fc-day-number">3</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2024-03-04"><span class="fc-day-number">4</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2024-03-05"><span class="fc-day-number">5</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2024-03-06"><span class="fc-day-number">6</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2024-03-07"><span class="fc-day-number">7</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-today " data-date="2024-03-08"><span class="fc-day-number">8</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-09"><span class="fc-day-number">9</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">4:18p</span> <span class="fc-title">See John Deo</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-10"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-11"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-12"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-13"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-14"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-15"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-16"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-10"><span class="fc-day-number">10</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-11"><span class="fc-day-number">11</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-12"><span class="fc-day-number">12</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-13"><span class="fc-day-number">13</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-14"><span class="fc-day-number">14</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-15"><span class="fc-day-number">15</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-16"><span class="fc-day-number">16</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-dark fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">12:11p</span> <span class="fc-title">Hey!</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">2:11p</span> <span class="fc-title">Buy a Theme</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-17"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-18"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-19"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-20"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-21"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-22"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-23"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-17"><span class="fc-day-number">17</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-18"><span class="fc-day-number">18</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-19"><span class="fc-day-number">19</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-20"><span class="fc-day-number">20</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-21"><span class="fc-day-number">21</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-22"><span class="fc-day-number">22</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-23"><span class="fc-day-number">23</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-24"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-30"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <th ead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-24"><span class="fc-day-number">24</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-30"><span class="fc-day-number">30</span></td>
                                                                                                    </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 68px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-31"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2024-04button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                                        </div>
                                                        <div class="fc-center">
                                                            <h2>March 2024</h2>
                                                        </div>
                                                        <div class="fc-clear"></div>
                                                    </div>
                                                    <div class="fc-view-container" style="">
                                                        <div class="fc-view fc-month-view fc-basic-view" style="">
                                                            <table class="">
                                                                <thead class="fc-head">
                                                                    <tr>
                                                                        <td class="fc-head-container fc-widget-header">
                                                                            <div class="fc-row fc-widget-header">
                                                                                <table class="">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                                                            <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fc-body">
                                                                    <tr>
                                                                        <td class="fc-widget-content">
                                                                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 398px;">
                                                                                <div class="fc-day-grid fc-unselectable">
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2024-02-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2024-02-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2024-02-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2024-02-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2024-02-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2024-03-01"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2024-03-02"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2024-02-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2024-02-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2024-02-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2024-02-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2024-02-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2024-03-01"><span class="fc-day-number">1</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-past" data-date="2024-03-02"><span class="fc-day-number">2</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2024-03-03"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2024-03-04"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2024-03-05"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2024-03-06"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2024-03-07"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-today " data-date="2024-03-08"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-09"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2024-03-03"><span class="fc-day-number">3</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2024-03-04"><span class="fc-day-number">4</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2024-03-05"><span class="fc-day-number">5</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2024-03-06"><span class="fc-day-number">6</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2024-03-07"><span class="fc-day-number">7</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-today " data-date="2024-03-08"><span class="fc-day-number">8</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-09"><span class="fc-day-number">9</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">4:18p</span> <span class="fc-title">See John Deo</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-10"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-11"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-12"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-13"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-14"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-15"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-16"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-10"><span class="fc-day-number">10</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-11"><span class="fc-day-number">11</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-12"><span class="fc-day-number">12</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-13"><span class="fc-day-number">13</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-14"><span class="fc-day-number">14</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-15"><span class="fc-day-number">15</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-16"><span class="fc-day-number">16</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-dark fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">12:11p</span> <span class="fc-title">Hey!</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable">
                                                                                                                <div class="fc-content"><span class="fc-time">2:11p</span> <span class="fc-title">Buy a Theme</span></div>
                                                                                                            </a></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-17"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-18"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-19"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-20"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-21"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-22"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-23"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-17"><span class="fc-day-number">17</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-18"><span class="fc-day-number">18</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-19"><span class="fc-day-number">19</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-20"><span class="fc-day-number">20</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-21"><span class="fc-day-number">21</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-22"><span class="fc-day-number">22</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-23"><span class="fc-day-number">23</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-24"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2024-03-25"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2024-03-26"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2024-03-27"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2024-03-28"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2024-03-29"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2024-03-30"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <th ead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-24"><span class="fc-day-number">24</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2024-03-25"><span class="fc-day-number">25</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2024-03-26"><span class="fc-day-number">26</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2024-03-27"><span class="fc-day-number">27</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2024-03-28"><span class="fc-day-number">28</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2024-03-29"><span class="fc-day-number">29</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2024-03-30"><span class="fc-day-number">30</span></td>
                                                                                                    </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 68px;">
                                                                                        <div class="fc-bg">
                                                                                            <table class="">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2024-03-31"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2024-04-01"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2024-04-02"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2024-04-03"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2024-04-04"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2024-04-05"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2024-04-06"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2024-03-31"><span class="fc-day-number">31</span></td>
                                                                                                        <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2024-04-01"><span class="fc-day-number">1</span></td>
                                                                                                        <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2024-04-02"><span class="fc-day-number">2</span></td>
                                                                                                        <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2024-04-03"><span class="fc-day-number">3</span></td>
                                                                                                        <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2024-04-04"><span class="fc-day-number">4</span></td>
                                                                                                        <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2024-04-05"><span class="fc-day-number">5</span></td>
                                                                                                        <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2024-04-06"><span class="fc-day-number">6</span></td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <option value="">Pilih Paket</option>
                                            @foreach ($data as $paket)
                                            <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form mb-30">
                                    <a href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Opsi pemesanan fleksibel<br>Guides</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>
                                Pembayaran aman dan nyaman<br>Payment</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Semua keperluanmu di satu tempat<br>Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Easy Reschedule & Refund.<br>are Happy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Favourite Places Start -->
    <div class="favourite-place place-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED PHOTO Packages</span>
                        <h2>The Package</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $product)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="card card-product card-body p-lg-4 p3">
                            <img src="{{ asset('images/' . $product->gambar) }}" alt="" class="img-fluid">
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                <h3>

                                    <a href="#" data-bs-target="#exampleModalToggle{{$product->id_produk}}" data-bs-toggle="modal">{{$product->nama_paket}}</a>

                                </h3>

                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li><i class="far fa-clock"></i>{{$product->slot}} Available</li>
                                    <li><i class="fas fa-map-marker-alt"></i>SOS GACA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalToggle{{$product->id_produk}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel{{$product->id_produk}}" tabindex="-1" style="overflow-y: auto;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel{{$product->id_produk}}">Select Service Extra</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex flex-column mb-3">
                                    <table>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="service{{$product->id_produk}}" value="{{$service->harga}}" onchange="calculateSubtotal({{$product->id_produk}})">
                                                    {{$service->nama_service}} - {{$service->harga}}
                                                </td>
                                                <td>
                                                    <input type="number" name="qty{{$product->id_produk}}" value="1" min="1" max="10" onchange="calculateSubtotal({{$product->id_produk}})">
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <div class="d-flex flex-column mb-3">
                                        <h6 class="mb-2">Selected Items</h6>
                                        <table id="selectedItemsTable{{$product->id_produk}}" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Layanan</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Item yang dipilih akan ditampilkan di sini -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <h6 class="mb-2">SUMMARY</h6>
                                    <div class="d-flex justify-content-between">
                                        <span id="productName{{$product->id_produk}}">{{$product->nama_paket}}</span>
                                        <span id="productPrice{{$product->id_produk}}">{{ number_format($product->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <strong>Total Price</strong>
                                        <span id="subtotalPrice{{$product->id_produk}}">{{ number_format($product->harga, 0, ',', '.') }}</span>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2{{$product->id_produk}}" data-bs-toggle="modal" onclick="copySummaryToNextModal({{$product->id_produk}})">NEXT STEPS</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalToggle2{{$product->id_produk}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2{{$product->id_produk}}" tabindex="-1" style="overflow-y: auto;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2{{$product->id_produk}}">Isi Form Reservasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="reservasi" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No. HP</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>

                                    <div class="form-group">
                                        @if(auth()->check())
                                        <input type="hidden" id="username" name="username" value="{{ auth()->user()->nama }}">
                                        @else
                                        <input type="hidden" id="username" name="username" value="Guest">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" min="{{ date('Y-m-d') }}" required>
                                    </div>
                                    @if (!function_exists('isTimeReserved'))
                                    @php
                                    function isTimeReserved($time)
                                    {
                                    // Ambil tanggal hari ini
                                    $today = now()->toDateString();

                                    // Ambil tanggal besok
                                    $tomorrow = now()->addDay()->toDateString();

                                    // Periksa apakah waktu sudah direservasi pada tanggal hari ini atau besok
                                    return \App\Models\Reservasi::where('waktu', $time)
                                    ->where(function ($query) use ($today, $tomorrow) {
                                    $query->whereDate('tanggal', $today)
                                    ->orWhereDate('tanggal', $tomorrow);
                                    })
                                    ->exists();
                                    }
                                    @endphp
                                    @endif



                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <select class="form-select" id="waktu" name="waktu" required>
                                            @foreach($times as $time)
                                            @if(isTimeReserved($time->waktu))
                                            <option value="{{$time->waktu}}" disabled>{{$time->waktu}} - Sudah Dipesan</option>
                                            @else
                                            <option value="{{$time->waktu}}">{{$time->waktu}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtotal{{$product->id_produk}}">Subtotal</label>
                                        <input type="text" class="form-control" name="subtotal" id="subtotal{{$product->id_produk}}" value="0" readonly>
                                    </div>
                                    <!-- Di dalam modal kedua -->
                                    <div class="form-group">
                                        <table id="selectedItemsTable2{{$product->id_produk}}" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Layanan</th>
                                                    <th>Kuantitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Baris tabel akan ditambahkan secara dinamis di sini -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Di dalam modal kedua -->
                                    <div class="form-group">
                                        <h6 class="mb-2">SUMMARY</h6>
                                        <div class="d-flex justify-content-between">
                                            <input type="text" class="form-control" name="nama_paket" id="nama_paket{{$product->id_produk}}" value="nama_paket" style="border: none; background: transparent; padding: 0; margin: 0;" readonly>
                                            <span id="productPrice2{{$product->id_produk}}"></span>
                                        </div>
                                        <div class="d-flex justify-content-between">

                                            <strong>Total Price</strong>

                                            <span id="subtotalPrice2{{$product->id_produk}}">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle{{$product->id_produk}}" data-bs-toggle="modal">Back</button>
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Modal Peringatan untuk Login -->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Peringatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Anda perlu login untuk melihat detail produk. Apakah Anda ingin melanjutkan ke halaman login?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <a href="{{ route('loginn') }}" class="btn btn-primary">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- kene -->
</main>
@endsection

<script>
    // Mendapatkan tanggal hari ini
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;

    // Menetapkan tanggal minimum ke input tanggal
    document.getElementById("tanggal").setAttribute("min", today);
</script>

<script>
    function calculateSubtotal(id_produk) {
        var checkboxes = document.getElementsByName("service" + id_produk);
        var subtotal = parseInt(document.getElementById("productPrice" + id_produk).textContent.replace("Rp", "").replace(".", ""));

        var selectedItems = [];

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                var price = parseInt(checkboxes[i].value.replace(".", ""));
                var qty = parseInt(document.getElementsByName("qty" + id_produk)[i].value);
                subtotal += price * qty;

                var serviceName = checkboxes[i].parentNode.textContent.trim().split("-")[0].trim();
                selectedItems.push({
                    name: serviceName,
                    qty: qty
                });
            }
        }

        document.getElementById("subtotalPrice" + id_produk).textContent = "Rp" + subtotal.toLocaleString(); // Menggunakan toLocaleString() untuk memformat angka ke dalam format lokal yang sesuai
        document.getElementById("subtotal" + id_produk).value = subtotal; // Mengubah nilai subtotal di dalam input

        var selectedItemsTable = document.getElementById("selectedItemsTable" + id_produk).getElementsByTagName("tbody")[0];
        selectedItemsTable.innerHTML = "";

        selectedItems.forEach(function(item) {
            var row = selectedItemsTable.insertRow();
            var nameCell = row.insertCell(0);
            var qtyCell = row.insertCell(1);

            nameCell.textContent = item.name;
            qtyCell.textContent = item.qty;
        });
    }
</script>

<script>
    function copySummaryToNextModal(id_produk) {
        // var productName = document.getElementById("productName" + id_produk).textContent;
        // document.getElementById("productName2" + id_produk).value = productName;


        var productName = document.getElementById("productName" + id_produk).textContent;
        document.getElementById("nama_paket" + id_produk).value = productName;

        var productPrice = document.getElementById("productPrice" + id_produk).textContent;
        document.getElementById("productPrice2" + id_produk).textContent = "Price: " + productPrice;

        var subtotalPrice = document.getElementById("subtotalPrice" + id_produk).textContent;
        document.getElementById("subtotalPrice2" + id_produk).textContent = "Total Price: " + subtotalPrice;

        var selectedItemsTable = document.getElementById("selectedItemsTable" + id_produk).getElementsByTagName("tbody")[0];
        var selectedItemsTable2 = document.getElementById("selectedItemsTable2" + id_produk).getElementsByTagName("tbody")[0];
        selectedItemsTable2.innerHTML = "";

        for (var i = 0; i < selectedItemsTable.rows.length; i++) {
            var newRow = selectedItemsTable2.insertRow();
            var nameCell = newRow.insertCell(0);
            var qtyCell = newRow.insertCell(1);

            nameCell.textContent = selectedItemsTable.rows[i].cells[0].textContent;
            qtyCell.textContent = selectedItemsTable.rows[i].cells[1].textContent;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Inisialisasi tooltip
        $('[data-toggle="tooltip"]').tooltip();
        // Inisialisasi modal
        $('[data-bs-toggle="modal"]').on('click', function() {
            var target = $(this).data('bs-target');
            $(target).modal('show');
        });
    });
</script>
