<?php
/* @var $this yii\web\View */
/* @var $model app\models\Request */
?><!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TopHotels</title>
</head>
<body>
<div class="page">
    <div class="container">
        <div id="leftbar" class="leftbar"></div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f0f4f5" style="height: 100%;">
            <tbody>
            <tr>
                <td valign="top" style="padding-top: 30px;">
                    <div style="margin: 0 auto;max-width: 600px; min-width: 320px;">
                        <!-- Outlook-->
                        <!--[if mso]>
                        <table border="0" cellpadding="0" cellspacing="0" width="600" align="center"
                               style="margin: 0;padding: 0;width:600px;">
                            <tr>
                                <td style="line-height:0; font-size:0; mso-line-height-rule:exactly;">
                        <![endif]-->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                            <tbody>
                            <tr>
                                <td style="border-bottom: 1px solid #f0f4f5;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                        <tr>
                                            <td style="padding: 20px 0 20px 30px;">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI0AAAA1CAYAAAB8x2i9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTRGNkI1MTc3QzE0MTFFNkJFM0ZGODUwMTAzNEU4NzEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTRGNkI1MTg3QzE0MTFFNkJFM0ZGODUwMTAzNEU4NzEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5NEY2QjUxNTdDMTQxMUU2QkUzRkY4NTAxMDM0RTg3MSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5NEY2QjUxNjdDMTQxMUU2QkUzRkY4NTAxMDM0RTg3MSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqU9+DQAAAuVSURBVHja7F0LlFVVGT53XoHMMDOID2R0eKhJZpAOGplprtDGlilRcc1Ks2yFkaglrpTIfIIL1yJF12Ip5CNzWPkIWHUTW2oPEmkwaSihBGdgQhEGhhmked++/97/wD7/3fucc++51+7cOXutf845+3Ue+zv///3/3ueOZQ2RFG+0iq0wZSUVDWIQzIFEfNY9B5u1adQfD/lICI8CAw0SAWGuDwDQPT4IuRBync/6j0P6QngUHmj2QBZhkKd41PsWZCrvU/3xHvV/ADkPsj+ER+GBZh+kDPI0gHCUQWtUY3O3kjUCssJkppD/UWzuUvoPU4GBpo23p0GWGOrcCTlG5F0Ama0BDAHwFwzEjkid1R/CozA1jZ2uxaDPFCCYjM13DW0XovwkkXc7ZLIAZJgKGDSUHgEQahgwESa/Jje7AvKobaawnYbNLUp5yGeGCGiIvzzF8ZivMpl1S9Mh30b9cmyfEM8i5DMuqWSQe08yfZqJ79d99nE/g+dkD0CGqUBAYxrYW9Log8zUlzX5oXkqRPME7+YgNr0fMCDDNMg5TS69nBA0BQyaXA1uaJ5C0OSNBgtBk6ceVGieQu/Jx+B+CKLOPqkUuULcZTskzvvVSj7NaXeGoBk6oCHAqDNMvQpoqiDDlbIDCmjUNv91gCbkNKH3FJqnUNPIwSUN0a3kqvvvWc4ZqLiy36rsH5nT7orUJfROmAoaNMRHBgw1VFOlgoamKru0YApNU4GDZm/ibylEXY/XAXmX98cKTvMWA4yWY50g/LD9oWkKOU3IZ0JNYxzgAXalD7MS4X53a8xQr2jTPXRAM+mMhxuwOV7Jmv9m03V/9g+ahvrR2H4qg3Nvs6KxJkdOQz1FRWZBzmeHlijqRsjTqNti7Kmhnm6APhmhRVTlLMWsSTZDXkP7fiNo+pnw6pKJoXQb27SJB3wmNuoqv214wE2GwaAvJMYoWU2ouy0PcfMJSK1yPDpdTUOLqZ/P4MQ/g9ygDHzUSq6WkxfwJcgdKF+M7QIMfp8AzBxu585dGup/iu1DaH+YssLL6Yo3WocSkZoaRW/2KZ4RwXGY0tMO1kyjICOV/F2QHi3MrodcZbxvZ/oR5DLl+EbLvH55iHOahvp5CW1iRmwpP9DnULc4AxM5moH1kFHblAlRz6zLLxH5kfw3T9BkEUjV4AdNQ/0M/F3ks/allvOTknTTbJzvaq0H1SdEjb/4yY/nL2gAlFGQm7C7BXL14AZNQz2hflmarW5Gu8kBzroA7YtSOAiZne0sO4TZ2a7IgNJKze/JzzgNwHIr3wUtTT01X7wn8jVaNOZghHLcqXkD6fgmK/W7Inrz50MaIWcl+IxlHSeAugAy03BN/2Ie0c18a75oP56J9ssOzTBCxGPaWYNUsolSIUZapdo6EikecNxdvmmas63klGweudzR2HpsxwkN8pggfytQ7wZRp5TfADW9b9FXANHYFj7eiHovM4BU2nl5wmOKxt7VXNM7yH+B919BvRexfUPQ2fO0oKkSMO/jsw4XULdBU6IFTRgRzmGc5mIN8b1HAUwyRWP/xsCTtlkstM3nIcs9zxKNbUX756zkZyl2Os3kImct9pN7s0MhholsGF+Ha74nS/1Ws4anl+zNTF1+9FPO/dB2J4U+0NdAUNBcIo7p5h821H3ESn4jrWoLf6BJpr8J0IxKGWT6e0BcDaXdDs/oCKdpFfm5A6EcjMvYcfiwelXIX0kuOgZmN9e7hs34sZLToczW+j9E/We4/lHc73dUPxH5a7H5Jurt8nl9ZUwp5orx2oWyRejngSBEeKo4/j20QrtBW9Bs0FqRe2Ya5+oWx5EcDfJApM4BvWwDhj6v+bUAjK15r4BsQJ0azhvJAbjhom4159eyFqB+h/HznSMCC5QugvyRPDCfl/lLK/kZ0DCRf4Idn8oMNEnv5XSR6xWGXieOa9FPuc8z1orjjhSXe5TyKGuVR3ecyLfvuEbJOzH3pgmD9jlsFnpUo8jzSorHpNn9fZBzXconch2va5zl4qBQ2hzEPJ2oeQO2erTRlY/3AdCSBHF2pu054iB+SPA1eLiXG8qONQwG3YPfyPAnrWQU3S8Y6RnKH2vaxb6h6nV+g9x3mJf3XLqb43G6piBxGp2q2+nRplWTV+FDoy3iN0VNr6eAhiYm9yjSp7jean5cMWp23t60AFghdJcqww1t6jUmaTVkCnupPaKMQg5EYFdZRxZ5qG/7KhaKSH3fci4zW8ovNYk6PVTKJtAEPvI/pwn2dwnfE+XTz7D8I4imqdTkdXi00ZXrzNMknqciwEznWI0k3L9LAc0hFpk6DVdz4AP1nGZpXrBZeOspRrYJAzaRSa+dyNRsRPkalBEHUuezliN/iTLYK8RdzWMvh8g1Td3MUMo/YyXnznRprABfC/qJ8T6FZdajv6IgmqbcB1mVSfcJbdyg4uknzG7UAMaOGR1IIcL0nkxQpFKhb2p+Eb8qat4xOY/RyFUETzJg7PSohuif48M0nSL43hr0e3ipKva3iliaWyReasla9O/45Y2gLvdBTd7IDLRTZ5rn/Q/kx46nW2f1xxvxhkXQf4nwRyx+d0o0Q6LmFedO0+DBV2qI/J/EYOxEvRZR72OW9+oD6YxENHxLfZlPYn6lSzs0Ht2LqE9an1ztzqDBvXafPEe6in7AZ0rNidhONLZXU7YXFrjSwQz6Ff1WrNFvat2+tDTNa8I8OoILGu4yxif/a7XSX+MyQRxfyWJKRQYrQcDdD4BssJLTFnai6YvbmPx/DXVeCgKaNoMn9IpLm3GaPD8Bp3cgP0+4jE6z5OQih0CWmzUluomKAYagDnzeaT0e3u0GrTJFA5qRPr20/Wk5Cf60ux8zpCZas/QbTT4BP4b7uwD3/mpmnCYa26kxLVM9Wp0ljnejn32GN/lstuljExKN3eYCmGyalVxwGt1PuOl+o7hfQ/i9UlmWqIWtbX6Lzb0u51pOMaQg0wj/FGTtsx71L9QFijSpCwD5a5rXki3Q5MJ7MplyGS+p8uXfuXukXV4OCXETDLxb+a0op5UG92soxyRITRDQvCRAcwpc5XMx4Os08ZY6y0r52fi/ZHFg2vIYNLpgGv1c2xZNnjTLOq9zhMt9P4hBnxf0gtHHY+zq36kJ+I0NMve0WpO3EADRhcDv8dn+/w2arJsnDEAbe31GrYsBOplNsZoaefu+Jp5i0taX2rGULFx3O4QCh8+KomFBTrBBQycpHrEUwCljDVPCgbrpKaYpGmscIpqGktS+FNJXSez3NG6yHfWWIcsvKOuEN1nOD3Zoycgdurkr5B3vIzwwUwO6t6Qbkbl5isYGGBBLRQnNg8xA2SYOztVoWt+X5UHJd9DQovuvKMdHk5eCAbqLHYTrRf3n8ZbbhLVFo2l2oC3xmWshRF6/qJSTi3wRylcz6SWwTOOxONoFMASWJyFvY38ZOyTkNV0lOVrQj+VoncxsTZBpjCE+YXOZp7I8KNkY7IORupz95xVyY4lcniq0sine84Cy/3dNeQULxVGWCNDYnuxUDTCqyOwYzjmR3XHinqapBopwNQezf9EYuYVXaOyuGym8MqGl8g80OVt8hYHq1WgTU6K5pVeV4z+4eVKoS9HllT77nuBSdrqP9r/C+TqCk6bkV5YX+3job1s0YRaNNedgXPblSR9uwKF1zzd7VHtB8hu0O+TDnNNqPT+f1Y7LsIzSNhv4JvO0hRFuIkMSOOvAYc7A3k+s5LLMCuE6Lkv4/dGYLrDUKs71RgZjQnHfVQHHdXMWnsVmEW9pFQBYDBNBL9ndljPY2czccAnq6D4/vpfHikBnTwPQoo7d3G8H+iWPbC6DTgVAD/OT5YrHul44MRQJX8MWg+jGx0WciejEApwn8WJFsv5KJV1uso3FiRhDNNZlhUlHPEuZk/SJGW/Lg6zSMkziXr1oFzfUK+G+CYDdpnou57G/P6X2PbL9/wQYAHYinZbi70knAAAAAElFTkSuQmCC" alt="" border="0"
                                                     style="width: 141px;height: 53px;">
                                            </td>
                                            <td style="padding: 0 30px 25px 10px;font-family:Arial,sans-serif;font-size: 16px; text-align: right; vertical-align: bottom; color: #292d96; font-weight: 700;">
                                                Welcome.TopHotels.team
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td style="font: 16px Arial, sans-serif;line-height: 20px;padding: 35px 30px 20px;text-align: center;">
                                    Здравствуйте!
                                </td>
                            </tr>

                            <tr>
                                <td style="font: 16px Arial, sans-serif;line-height: 20px;padding: 0 30px 10px;">Вы получили новую заявку на подбор тура от пользователя - <a href="http://sanginov93.tophotels.site/project1/web/admin/request/view/<?=$model->id;?>" target="_blank" style="-webkit-text-size-adjust:none;font: 16px Arial, sans-serif;line-height: 20px;color: #318cc6;text-decoration: none;">№ <?=$model->id;?></a>. Рекомендуем Вам скорее ее обработать и связаться с туристом.</td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 20px;padding-top: 20px"><a href="http://sanginov93.tophotels.site/project1/web/admin/request/view/<?=$model->id;?>" style="-webkit-text-size-adjust:none;font: 16px Arial, sans-serif;line-height: 20px;display: block;width: 230px;text-align: center;text-transform: uppercase;text-decoration: none;font-weight: bold;color: #ffffff;background-color: #00a551;margin: 0 auto;padding: 14px 0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;">Просмотреть заявку</a></td>
                            </tr>
                            </tbody>
                        </table>


                        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" style="padding: 15px;">
                            <tbody>
                            <tr>
                                <td style="border: 1px solid #d4d8d9;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                        <tr>
                                            <td style="font: 16px Arial, sans-serif;line-height: 20px;font-weight: bold;text-align: center;padding: 15px;">
                                                Полезная информация
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font: 15px Arial, sans-serif;line-height: 20px;padding: 0 15px 5px;">Ваш клиент: <a href="http://sanginov93.tophotels.site/project1/web/admin/request/view/<?=$model->id;?>" target="_blank" style="-webkit-text-size-adjust:none;font: 15px Arial, sans-serif;line-height: 20px;color: #318cc6;text-decoration: none;"><?=$model->name;?></a></td>
                                        </tr>
                                        <tr>
                                            <td style="font: 15px Arial, sans-serif;line-height: 20px;padding: 0 15px 5px;">
                                                Телефон:<a href="http://sanginov93.tophotels.site/project1/web/admin/request/view/<?=$model->id;?>" target="_blank" style="-webkit-text-size-adjust:none;font: 15px Arial, sans-serif;line-height: 20px;color: #000000;text-decoration: none;"><?=$model->phone;?></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td style="font-family:Arial,sans-serif;font-size: 16px;text-align: center;padding: 40px 5px;">
                                    Присоединяйтесь к нам в социальных сетях:
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <div style="max-width: 300px; margin: 0 auto;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td align="center">
                                                    <a href="https://vk.com/tophotels">
                                                        <img src="http://i.lightsoft.ru/th/soc-vk2.png" alt=""
                                                             style="width: 38px;height: 38px;">
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <a href="https://www.facebook.com/TopHotels">
                                                        <img src="http://i.lightsoft.ru/th/soc-fb2.png" alt=""
                                                             style="width: 38px;height: 38px;">
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <a href="https://ok.ru/tophotels">
                                                        <img src="http://i.lightsoft.ru/th/soc-ok2.png" alt=""
                                                             style="width: 38px;height: 38px;">
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <a href="https://twitter.com/tophotels">
                                                        <img src="http://i.lightsoft.ru/th/soc-tw2.png" alt=""
                                                             style="width: 38px;height: 38px;">
                                                    </a>
                                                </td>
                                                <td align="center">
                                                    <a href="https://www.instagram.com/tophotels/">
                                                        <img src="http://i.lightsoft.ru/th/soc-in2.png" alt=""
                                                             style="width: 38px;height: 38px;">
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td style="font-family:Arial,sans-serif;font-size: 12px;line-height: 16px;color: #999999;text-align: center;padding: 30px 5px;">Это письмо отправлено на адрес <a href="mailto:test.th.welcome@gmail.com" target="_blank">test.th.welcome@gmail.com</a> автоматически.<!-- Электронный адрес был указан при регистрации пользователя в качестве представителя отеля Alva Donna Exclusive &amp; SPA 5* (Турция, Белек).--> При возникновении вопросов вы можете обратиться в <a href="https://tophotels.ru/feedback">техподдержку TopHotels</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</body>

</html>