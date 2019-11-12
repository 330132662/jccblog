<footer id="footer" class="footer" style="background-color: #9caebf">
    <div class="container text-center" style="line-height:0px;background-color: #9caebf">
        <div class="row content">
            <div class="col-md-4 offset-md-4">
                <ul class="connect">
                    <li class="mx-2">
                        <a href="{{ url('/') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    @if(config('blog.footer.github.open'))
                        <li class="mx-2">
                            <a href="{{ config('blog.footer.github.url') }}" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    @endif
                    @if(config('blog.footer.twitter.open'))
                        <li class="mx-2">
                            <a href="{{ config('blog.footer.twitter.url') }}" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                </ul>
                <ul class="connect">
                    <li class="mx-2"><a target="_blank" href="https://console.upyun.com/register/?invite=rJcvqZikr"
                                        title="文件存储服务赞助商">
                            <img alt="-文件存储服务赞助商"
                                 src="https://help.upyun.com/wp-content/uploads/2018/08/logo.png"></a></li>
                </ul>
                <ul class="connect">
                    <li class="mx-2"><a href="https://m.kuaidi100.com/" target="_blank">快递查询</a></li>
                </ul>
                <div class="links">
                    <a href="{{ url('link') }}">{{ lang('Links') }}</a>
                </div>

            </div>
        </div>
    </div>

    <div class="copy-right text-center">
        <span>{!! config('blog.footer.meta') !!}</span>
        <p>
            <span><a href="http://www.beian.miit.gov.cn/publish/query/indexFirst.action" target="_blank">网站备案：鲁ICP备xxx号</a></span>
    </div>
</footer>
