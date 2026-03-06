@extends('layouts.admin')

@section('style')
    <style>
        :root {
            --gm-bg: #f3f6fc;
            --gm-card: #ffffff;
            --gm-border: #e2e8f4;
            --gm-text: #111b3a;
            --gm-muted: #6d7894;
            --gm-primary: #2a76f5;
            --gm-secondary: #45b6fe;
            --gm-success: #18b66f;
            --gm-warning: #f2a62a;
            --gm-danger: #eb4f69;
        }

        .dashboard-content {
            background: radial-gradient(circle at 12% -10%, #deebff 0%, rgba(222, 235, 255, 0) 52%),
                radial-gradient(circle at 100% -20%, #dff8ff 0%, rgba(223, 248, 255, 0) 48%),
                var(--gm-bg);
        }

        .admin-hero {
            border-radius: 20px;
            padding: 28px 26px;
            color: #fff;
            background: linear-gradient(135deg, #132c74, #2258c8 52%, #39a0ff);
            box-shadow: 0 24px 48px rgba(25, 49, 115, .35);
            position: relative;
            overflow: hidden;
            animation: floatIn .6s ease both;
        }

        .admin-hero:before,
        .admin-hero:after {
            content: "";
            position: absolute;
            border-radius: 999px;
            background: rgba(255, 255, 255, .12);
        }

        .admin-hero:before {
            width: 280px;
            height: 280px;
            top: -130px;
            right: -100px;
        }

        .admin-hero:after {
            width: 200px;
            height: 200px;
            bottom: -90px;
            right: 90px;
        }

        .hero-kicker {
            font-size: 13px;
            opacity: .85;
            letter-spacing: .4px;
            margin-bottom: 4px;
        }

        .hero-title {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
        }

        .hero-meta {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: rgba(255, 255, 255, .16);
            border: 1px solid rgba(255, 255, 255, .24);
            border-radius: 999px;
            padding: 7px 13px;
            font-size: 12px;
            margin-top: 12px;
        }

        .kpi-card {
            background: var(--gm-card);
            border: 1px solid var(--gm-border);
            border-radius: 16px;
            padding: 18px;
            box-shadow: 0 14px 34px rgba(16, 36, 86, .08);
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            animation: floatIn .6s ease both;
        }

        .kpi-card:hover {
            transform: translateY(-5px);
            border-color: #cad6ee;
            box-shadow: 0 18px 40px rgba(16, 36, 86, .14);
        }

        .kpi-name {
            font-size: 13px;
            color: var(--gm-muted);
            margin-bottom: 8px;
        }

        .kpi-value {
            margin: 0;
            color: var(--gm-text);
            font-size: 34px;
            line-height: 1;
            font-weight: 700;
        }

        .kpi-foot {
            margin-top: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .delta-chip {
            border-radius: 999px;
            font-size: 11px;
            font-weight: 600;
            padding: 4px 9px;
            white-space: nowrap;
        }

        .delta-up {
            background: rgba(24, 182, 111, .14);
            color: #138e57;
        }

        .delta-down {
            background: rgba(235, 79, 105, .14);
            color: #cb3552;
        }

        .delta-flat {
            background: rgba(13, 55, 125, .09);
            color: #385a9f;
        }

        .kpi-icon {
            width: 45px;
            height: 45px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 16px;
        }

        .ic-primary {
            background: linear-gradient(140deg, #2a76f5, #57a8ff);
        }

        .ic-success {
            background: linear-gradient(140deg, #18b66f, #48d491);
        }

        .ic-warning {
            background: linear-gradient(140deg, #f2a62a, #f6cc55);
        }

        .ic-danger {
            background: linear-gradient(140deg, #eb4f69, #ff7f90);
        }

        .panel-card {
            border: 1px solid var(--gm-border);
            border-radius: 17px;
            background: #fff;
            box-shadow: 0 12px 34px rgba(16, 36, 86, .08);
            animation: floatIn .68s ease both;
        }

        .panel-head {
            padding: 15px 18px;
            border-bottom: 1px solid var(--gm-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-title {
            margin: 0;
            color: var(--gm-text);
            font-size: 16px;
            font-weight: 700;
        }

        .panel-sub {
            margin: 3px 0 0;
            color: var(--gm-muted);
            font-size: 12px;
        }

        .panel-body {
            padding: 14px 16px 16px;
        }

        .metric-line {
            margin-bottom: 15px;
        }

        .metric-line:last-child {
            margin-bottom: 0;
        }

        .metric-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-bottom: 8px;
            color: var(--gm-muted);
        }

        .metric-label {
            color: var(--gm-text);
            font-weight: 600;
        }

        .metric-bar {
            width: 100%;
            height: 8px;
            border-radius: 999px;
            background: #e9eef8;
            overflow: hidden;
        }

        .metric-progress {
            height: 100%;
            border-radius: 999px;
            animation: growBar .9s ease both;
            transform-origin: left;
        }

        .mp-success {
            background: linear-gradient(90deg, #1cb875, #49d8a1);
        }

        .mp-primary {
            background: linear-gradient(90deg, #2a76f5, #67b2ff);
        }

        .mp-warning {
            background: linear-gradient(90deg, #f2a62a, #f6cb5a);
        }

        .activity-item {
            display: flex;
            gap: 11px;
            border-bottom: 1px dashed #e7edf9;
            padding: 10px 0;
        }

        .activity-item:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .activity-icon {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: #edf3ff;
            color: #2a76f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            flex-shrink: 0;
        }

        .activity-title {
            color: var(--gm-text);
            font-size: 13px;
            font-weight: 600;
            margin: 0;
        }

        .activity-sub {
            color: var(--gm-muted);
            font-size: 12px;
            margin: 2px 0 0;
        }

        .activity-time {
            color: #8f98ad;
            font-size: 11px;
            margin-top: 3px;
        }

        .event-card {
            border: 1px solid #e9eef9;
            border-radius: 12px;
            padding: 11px 12px;
            margin-bottom: 9px;
            background: #fbfdff;
            transition: all .2s ease;
        }

        .event-card:hover {
            border-color: #d2def3;
            transform: translateY(-2px);
            background: #fff;
        }

        .event-title {
            margin: 0;
            color: var(--gm-text);
            font-size: 13px;
            font-weight: 600;
        }

        .event-sub {
            margin: 4px 0 0;
            color: var(--gm-muted);
            font-size: 12px;
        }

        .quick-link {
            text-decoration: none !important;
            border: 1px solid var(--gm-border);
            border-radius: 12px;
            padding: 11px 12px;
            font-size: 13px;
            color: var(--gm-text);
            display: block;
            background: #fff;
            transition: all .2s ease;
        }

        .quick-link:hover {
            color: var(--gm-primary);
            border-color: #cfdaf2;
            box-shadow: 0 9px 24px rgba(20, 42, 96, .12);
            transform: translateY(-2px);
        }

        .quick-link i {
            margin-right: 7px;
        }

        @keyframes floatIn {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes growBar {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }
    </style>
@endsection

@section('content')
    <div class="admin-hero mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="hero-kicker">Global Minds | Admin Intelligence Panel</div>
                <h2 class="hero-title text-white">Welcome back, Admin</h2>
                <div class="hero-meta"><i class="fas fa-wave-square"></i> Your live operations summary is updated now</div>
            </div>
            <div class="col-md-4 text-md-right mt-3 mt-md-0">
                <div class="hero-meta"><i class="far fa-calendar-alt"></i>{{ now()->format('D, d M Y') }}</div>
            </div>
        </div>
    </div>

    @php
        $contactDelta = $monthDeltas['contacts']['rate'];
        $consultDelta = $monthDeltas['consultations']['rate'];
        $reserveDelta = $monthDeltas['reservations']['rate'];
        $postDelta = $monthDeltas['posts']['rate'];
    @endphp

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <div class="kpi-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="kpi-name">Contact Messages</div>
                        <h3 class="kpi-value count-up" data-count="{{ $stats['contact_messages'] }}">0</h3>
                    </div>
                    <div class="kpi-icon ic-primary"><i class="fas fa-envelope-open-text"></i></div>
                </div>
                <div class="kpi-foot">
                    <span class="text-muted small">This month: {{ $monthDeltas['contacts']['current'] }}</span>
                    <span
                        class="delta-chip {{ $contactDelta > 0 ? 'delta-up' : ($contactDelta < 0 ? 'delta-down' : 'delta-flat') }}">
                        {{ $contactDelta >= 0 ? '+' : '' }}{{ $contactDelta }}%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <div class="kpi-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="kpi-name">Consultations</div>
                        <h3 class="kpi-value count-up" data-count="{{ $stats['consultations'] }}">0</h3>
                    </div>
                    <div class="kpi-icon ic-success"><i class="fas fa-user-check"></i></div>
                </div>
                <div class="kpi-foot">
                    <span class="text-muted small">This month: {{ $monthDeltas['consultations']['current'] }}</span>
                    <span
                        class="delta-chip {{ $consultDelta > 0 ? 'delta-up' : ($consultDelta < 0 ? 'delta-down' : 'delta-flat') }}">
                        {{ $consultDelta >= 0 ? '+' : '' }}{{ $consultDelta }}%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <div class="kpi-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="kpi-name">Event Reservations</div>
                        <h3 class="kpi-value count-up" data-count="{{ $stats['event_reservations'] }}">0</h3>
                    </div>
                    <div class="kpi-icon ic-warning"><i class="fas fa-ticket-alt"></i></div>
                </div>
                <div class="kpi-foot">
                    <span class="text-muted small">This month: {{ $monthDeltas['reservations']['current'] }}</span>
                    <span
                        class="delta-chip {{ $reserveDelta > 0 ? 'delta-up' : ($reserveDelta < 0 ? 'delta-down' : 'delta-flat') }}">
                        {{ $reserveDelta >= 0 ? '+' : '' }}{{ $reserveDelta }}%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <div class="kpi-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="kpi-name">Published Content</div>
                        <h3 class="kpi-value count-up"
                            data-count="{{ $stats['posts'] + $stats['events'] + $stats['success_stories'] }}">0</h3>
                    </div>
                    <div class="kpi-icon ic-danger"><i class="fas fa-layer-group"></i></div>
                </div>
                <div class="kpi-foot">
                    <span class="text-muted small">Posts this month: {{ $monthDeltas['posts']['current'] }}</span>
                    <span
                        class="delta-chip {{ $postDelta > 0 ? 'delta-up' : ($postDelta < 0 ? 'delta-down' : 'delta-flat') }}">
                        {{ $postDelta >= 0 ? '+' : '' }}{{ $postDelta }}%
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Inquiries Trend</h4>
                        <p class="panel-sub">Contacts, consultations and reservations over the last 6 months</p>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="inquiriesChart" style="height: 340px;"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Quality Snapshot</h4>
                        <p class="panel-sub">Operational quality and content health</p>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="metric-line">
                        <div class="metric-top">
                            <span class="metric-label">Review Approval Rate</span>
                            <span>{{ $qualityMetrics['review_approval_rate'] }}%</span>
                        </div>
                        <div class="metric-bar">
                            <div class="metric-progress mp-success"
                                style="width: {{ $qualityMetrics['review_approval_rate'] }}%"></div>
                        </div>
                    </div>
                    <div class="metric-line">
                        <div class="metric-top">
                            <span class="metric-label">Featured Team Coverage</span>
                            <span>{{ $qualityMetrics['featured_team_rate'] }}%</span>
                        </div>
                        <div class="metric-bar">
                            <div class="metric-progress mp-primary"
                                style="width: {{ $qualityMetrics['featured_team_rate'] }}%"></div>
                        </div>
                    </div>
                    <div class="metric-line">
                        <div class="metric-top">
                            <span class="metric-label">Published Story Rate</span>
                            <span>{{ $qualityMetrics['published_story_rate'] }}%</span>
                        </div>
                        <div class="metric-bar">
                            <div class="metric-progress mp-warning"
                                style="width: {{ $qualityMetrics['published_story_rate'] }}%"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="small text-muted">
                        Reviews: {{ $stats['reviews_approved'] }} approved, {{ $stats['reviews_pending'] }} pending,
                        {{ $stats['reviews_rejected'] }} rejected.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Content Mix</h4>
                        <p class="panel-sub">Distribution of core modules</p>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="contentMixChart" style="height: 290px;"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Top University Countries</h4>
                        <p class="panel-sub">Country focus based on stored universities</p>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="countryChart" style="height: 290px;"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Review Status</h4>
                        <p class="panel-sub">Approval workflow balance</p>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="reviewChart" style="height: 290px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Recent Activity</h4>
                        <p class="panel-sub">Latest inbound actions across forms</p>
                    </div>
                </div>
                <div class="panel-body">
                    @forelse ($recentActivities as $item)
                        <div class="activity-item">
                            <div class="activity-icon"><i class="{{ $item['icon'] }}"></i></div>
                            <div>
                                <p class="activity-title">{{ $item['title'] }} <span
                                        class="badge badge-light">{{ $item['type'] }}</span></p>
                                <p class="activity-sub">{{ $item['subtitle'] }}</p>
                                <div class="activity-time">
                                    {{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans() }}</div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted mb-0">No recent activity found.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-xl-4 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Upcoming Events</h4>
                        <p class="panel-sub">Nearest scheduled events</p>
                    </div>
                </div>
                <div class="panel-body">
                    @forelse ($upcomingEvents as $event)
                        <div class="event-card">
                            <p class="event-title">{{ $event->title }}</p>
                            <p class="event-sub">
                                <i class="far fa-calendar mr-1"></i>{{ optional($event->date)->format('d M Y') }}
                                @if ($event->location)
                                    <span class="mx-1">|</span><i
                                        class="fas fa-map-marker-alt mr-1"></i>{{ $event->location }}
                                @endif
                            </p>
                        </div>
                    @empty
                        <p class="text-muted mb-0">No upcoming events found.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-xl-3 mb-3">
            <div class="panel-card h-100">
                <div class="panel-head">
                    <div>
                        <h4 class="panel-title">Quick Actions</h4>
                        <p class="panel-sub">Fast navigation shortcuts</p>
                    </div>
                </div>
                <div class="panel-body">
                    <a href="{{ route('team.create') }}" class="quick-link mb-2"><i class="fas fa-user-plus"></i>Add
                        Team Member</a>
                    <a href="{{ route('posts.create') }}" class="quick-link mb-2"><i class="fas fa-pen-fancy"></i>Create
                        Blog Post</a>
                    <a href="{{ route('event.create') }}" class="quick-link mb-2"><i
                            class="fas fa-calendar-plus"></i>Add Event</a>
                    <a href="{{ route('destination.create') }}" class="quick-link mb-2"><i
                            class="fas fa-map-marked-alt"></i>Add Destination</a>
                    <a href="{{ route('admin.contact.index') }}" class="quick-link"><i class="fas fa-inbox"></i>Open
                        Contact Inbox</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        (function() {
            const monthLabels = @json($monthLabels);
            const monthlyInquiries = @json($monthlyInquiries);
            const reviewStatus = @json($reviewStatus);
            const contentMix = @json($contentMix);
            const countriesChart = @json($countriesChart);

            const sharedGrid = {
                borderColor: '#eaf0fb',
                strokeDashArray: 4,
            };

            new ApexCharts(document.querySelector("#inquiriesChart"), {
                chart: {
                    type: 'area',
                    height: 340,
                    toolbar: {
                        show: false
                    },
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 800
                    }
                },
                series: [{
                        name: 'Contacts',
                        data: monthlyInquiries.contacts
                    },
                    {
                        name: 'Consultations',
                        data: monthlyInquiries.consultations
                    },
                    {
                        name: 'Reservations',
                        data: monthlyInquiries.reservations
                    }
                ],
                colors: ['#2a76f5', '#18b66f', '#f2a62a'],
                stroke: {
                    width: 3,
                    curve: 'smooth'
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 0.28,
                        opacityFrom: 0.42,
                        opacityTo: 0.03,
                    }
                },
                xaxis: {
                    categories: monthLabels
                },
                dataLabels: {
                    enabled: false
                },
                grid: sharedGrid,
                legend: {
                    position: 'top'
                }
            }).render();

            new ApexCharts(document.querySelector("#reviewChart"), {
                chart: {
                    type: 'donut',
                    height: 290
                },
                series: reviewStatus.series,
                labels: reviewStatus.labels,
                colors: ['#18b66f', '#f2a62a', '#eb4f69'],
                stroke: {
                    width: 0
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%'
                        }
                    }
                },
                legend: {
                    position: 'bottom'
                }
            }).render();

            new ApexCharts(document.querySelector("#contentMixChart"), {
                chart: {
                    type: 'polarArea',
                    height: 290
                },
                series: contentMix.series,
                labels: contentMix.labels,
                colors: ['#2a76f5', '#4e8cf7', '#18b66f', '#33c8bb', '#f2a62a', '#eb4f69', '#8868ff'],
                stroke: {
                    colors: ['#fff']
                },
                legend: {
                    show: true,
                    position: 'bottom',
                    fontSize: '11px'
                }
            }).render();

            new ApexCharts(document.querySelector("#countryChart"), {
                chart: {
                    type: 'bar',
                    height: 290,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'Universities',
                    data: countriesChart.series
                }],
                colors: ['#2a76f5'],
                xaxis: {
                    categories: countriesChart.labels
                },
                plotOptions: {
                    bar: {
                        borderRadius: 6,
                        columnWidth: '54%'
                    }
                },
                grid: sharedGrid,
                dataLabels: {
                    enabled: false
                }
            }).render();

            document.querySelectorAll('.count-up').forEach((el) => {
                const target = parseInt(el.getAttribute('data-count'), 10) || 0;
                const duration = 850;
                const start = performance.now();

                const animate = (now) => {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.floor(target * eased).toLocaleString();
                    if (progress < 1) requestAnimationFrame(animate);
                };

                requestAnimationFrame(animate);
            });
        })();
    </script>
@endsection
