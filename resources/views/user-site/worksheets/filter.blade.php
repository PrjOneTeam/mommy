<div class="left-bar">
    <div id="filter-slider" class="filter-box">
        <div class="filter-wrap">
            <div class="filter-header">
                <div class="refine">{{__("Filter")}}<i>{{__("Your Selection")}}</i></div>
            </div>
            <div>
                <div class="filter-group mbo">
                    <h5 class="filter-title">@lang('app.subject')</h5>
                    <div class="area">
                        <ul id="subject" class="clearfix">
                            @foreach($topics as $key => $topic)
                                <li {{ str_contains(url()->current(), $key)  ? 'class=ck-active' : null }}>
                                    <a href="/worksheets/{{$key}}" data-path="{{$key}}" class="fp">@lang('app.' . $topic['name'])<i></i></a>
                                    @if(isset($topic['sub']))
                                        <ul class="expand clearfix hide">
                                            @foreach($topic['sub'] as $subKey => $subTopic)
                                                <li {{ str_contains(url()->current(), $subKey) ? 'class=ck-active' : null }}>
                                                    <a data-path="{{$subKey}}" href="/worksheets/{{ $subKey }}">@lang('app.' . $subTopic)</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="filter-group">
                    <h5 class="filter-title">@lang('app.grade')</h5>
                    <div class="area">
                        <ul class="clearfix">
                            <li>
                                <ul id="grade" class="clearfix">
                                    @foreach($grades as $grade)
                                        <li {{ str_contains(url()->current(), $grade) ? 'class=ck-active' : null }}>
                                            <a data-path="{{$grade}}" href="/worksheets/{{$grade}}">@lang('app.' . $grade)</a>
                                        </li>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="filter-group">
                    <h5 class="filter-title">@lang('app.resource_type')</h5>
                    <div class="area">
                        <ul>
                            <li>
                                <ul id="resource" class="clearfix">
                                    <li {{ strpos('f=1', url()->current()) ? 'class="ck-active"' : null }}>
                                        <a href="?f=1">{{__('Free')}}</a>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
{{--    @include('user-site.worksheets.left-bar-ads')--}}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var links = document.querySelectorAll('ul#subject li a.fp');
        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                var allLists = document.querySelectorAll('ul.expand');
                allLists.forEach(function(list) {
                    if (!list.classList.contains('hide')) {
                        list.classList.add('hide');
                    }
                });

                var listItems = document.querySelectorAll('#subject li');
                listItems.forEach(function(item) {
                    item.classList.remove('ck-active');
                });

                var ul = this.nextElementSibling;

                let currentUrl = window.location.href;
                let path = this.getAttribute('data-path');

                let isCurrentActive = currentUrl.includes(path);
                if (isCurrentActive) {
                    currentUrl.replace(path, '');
                    this.parentElement.classList.remove('ck-active');
                    setUrl({topic: path, remove: true});
                    ul.classList.add('hide');
                } else {
                    if (ul && ul.classList.contains('expand')) {
                        ul.classList.remove('hide');
                    }
                    this.parentElement.classList.add('ck-active');
                    setUrl({topic: path});
                }

                fetchWorksheet();
            });
        });

        var sub_links = document.querySelectorAll('ul.expand li a');
        sub_links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                sub_links.forEach(function(item) {
                    item.parentElement.classList.remove('ck-active');
                });

                let currentUrl = window.location.href;
                let path = this.getAttribute('data-path');

                let isCurrentActive = currentUrl.includes(path);
                if (isCurrentActive) {
                    currentUrl.replace(path, '');
                    link.parentElement.classList.remove('ck-active');
                    setUrl({topic: path, remove: true});
                } else {
                    link.parentElement.classList.add('ck-active');
                    setUrl({topic: path});
                }

                fetchWorksheet();
            });
        });

        var grade_links = document.querySelectorAll('ul#grade li a');
        grade_links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                grade_links.forEach((item) => {
                    item.parentElement.classList.remove('ck-active');
                });

                let currentUrl = window.location.href;
                let path = this.getAttribute('data-path');

                let isCurrentActive = currentUrl.includes(path);
                if (isCurrentActive) {
                    currentUrl.replace(path, '');
                    this.parentElement.classList.remove('ck-active');
                    setUrl({grade: path, remove: true});
                } else {
                    this.parentElement.classList.add('ck-active');
                    setUrl({grade: path});
                }

                fetchWorksheet();
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var link = document.querySelector('ul#resource li a');

        if (window.location.href.includes('?f=1')) {
            link.parentElement.classList.add('ck-active');
        }

        link.addEventListener('click', function(e) {
            e.preventDefault();
            var currentUrl = window.location.href;

            if (currentUrl.includes('?f=1')) {
                setUrl({'f': false});
                this.parentElement.classList.remove('ck-active');
            } else {
                setUrl({'f': true});
                this.parentElement.classList.add('ck-active');
            }
            fetchWorksheet();
        });
    });

    const setUrl = (option) => {
        let currentUrl = window.location.href;
        let isFree = currentUrl.includes('?f=1');
        if (isFree) {
            currentUrl = currentUrl.replace('?f=1', '');
        }
        let urlSplit = currentUrl.split('/');
        let url = '/worksheets';
        let currentGrade = urlSplit[4] ?? null;
        let currentTopic = urlSplit[5] ?? null;
        if (currentGrade && (currentGrade !== 'kindergarten' && currentGrade !== 'preschool')) {
            currentTopic = currentGrade;
            currentGrade = null;
        }

        if (option.grade) {
            currentGrade = option.grade;
        }

        if (option.topic) {
            currentTopic = option.topic;
        }

        if (currentGrade && option.remove !== true) {
            url += '/' + currentGrade;
        }

        if(currentTopic && option.remove !== true) {
            url += '/' + currentTopic;
        }

        url = url.split('?')[0];

        if (option.f === undefined && isFree) {
            option.f = true;
        }
        if (option.f === true) {
            url += '?f=1';
        }

        history.pushState({}, '', url);
    }

    const fetchWorksheet = async () => {
        const url = window.location.href;
        fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
        .then(async (response) => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const html = await response.text();
            document.getElementById('worksheets-body').innerHTML = html;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }
</script>
