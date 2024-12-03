<!-- neste caso é necessário fazer a adaptação do charts para frequencia semanal onde a filtrazem deve ser para o mes ou seja ultimas 4 semanas!-->


<div class="col-md-8 col-xxl-8 mb-4 order-0 order-xxl-4">
    <div class="card h-100">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Frequencia</h5>
                        </div>
                        <!--  <div class="dropdown">
                            <button class="btn p-0" type="button" id="totalRevenue" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded bx-lg text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenue">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div> -->
                    </div>
                    <div id="totalRevenueChart" class="px-3" style="min-height: 347px;">
                        <div id="apexchartsip32l25rl"
                            class="apexcharts-canvas apexchartsip32l25rl apexcharts-theme-light"
                            style="width: 338px; height: 332px;"><svg id="SvgjsSvg2119" width="338" height="332"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="338" height="332">
                                    <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 166px;">
                                        <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="1"
                                            seriesname="2023" data:collapsed="false"><span
                                                class="apexcharts-legend-marker"
                                                style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -5px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                rel="1" data:collapsed="false"></span><span
                                                class="apexcharts-legend-text"
                                                style="color: rgb(100, 110, 120); font-size: 13px; font-weight: 400; font-family: Public Sans;"
                                                rel="1" i="0" data:default-text="2023"
                                                data:collapsed="false">2023</span></div>
                                        <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="2"
                                            seriesname="2022" data:collapsed="false"><span
                                                class="apexcharts-legend-marker"
                                                style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -5px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                rel="2" data:collapsed="false"></span><span
                                                class="apexcharts-legend-text"
                                                style="color: rgb(100, 110, 120); font-size: 13px; font-weight: 400; font-family: Public Sans;"
                                                rel="2" i="1" data:default-text="2022"
                                                data:collapsed="false">2024</span></div>
                                    </div>
                                    <style type="text/css">
                                    .apexcharts-legend {
                                        display: flex;
                                        overflow: auto;
                                        padding: 0 10px;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom,
                                    .apexcharts-legend.apx-legend-position-top {
                                        flex-wrap: wrap
                                    }

                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        flex-direction: column;
                                        bottom: 0;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        justify-content: flex-start;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                        justify-content: center;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                        justify-content: flex-end;
                                    }

                                    .apexcharts-legend-series {
                                        cursor: pointer;
                                        line-height: normal;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                        display: flex;
                                        align-items: center;
                                    }

                                    .apexcharts-legend-text {
                                        position: relative;
                                        font-size: 14px;
                                    }

                                    .apexcharts-legend-text *,
                                    .apexcharts-legend-marker * {
                                        pointer-events: none;
                                    }

                                    .apexcharts-legend-marker {
                                        position: relative;
                                        display: inline-block;
                                        cursor: pointer;
                                        margin-right: 3px;
                                        border-style: solid;
                                    }

                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                        display: inline-block;
                                    }

                                    .apexcharts-legend-series.apexcharts-no-click {
                                        cursor: auto;
                                    }

                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                        display: none !important;
                                    }

                                    .apexcharts-inactive-legend {
                                        opacity: 0.45;
                                    }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG2121" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(57.633331298828125, 51)">
                                    <defs id="SvgjsDefs2120">
                                        <linearGradient id="SvgjsLinearGradient2125" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2126" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2127" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2128" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskip32l25rl">
                                            <rect id="SvgjsRect2130" width="270.3666687011719"
                                                height="255.73000000000002" x="-5" y="-3" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskip32l25rl"></clipPath>
                                        <clipPath id="nonForecastMaskip32l25rl"></clipPath>
                                        <clipPath id="gridRectMarkerMaskip32l25rl">
                                            <rect id="SvgjsRect2131" width="264.3666687011719"
                                                height="253.73000000000002" x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect2129" width="18.597619192940847" height="249.73000000000002"
                                        x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient2125)" class="apexcharts-xcrosshairs"
                                        y2="249.73000000000002" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG2151" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2152" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText2154"
                                                font-family="Public Sans" x="18.597619192940847" y="278.73"
                                                text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a7acb2"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2155">Segunda</tspan>
                                                <title>Segunda</title>
                                            </text><text id="SvgjsText2157" font-family="Public Sans"
                                                x="55.79285757882254" y="278.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2158">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText2160" font-family="Public Sans"
                                                x="92.98809596470423" y="278.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2161">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText2163" font-family="Public Sans"
                                                x="130.18333435058594" y="278.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2164">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText2166" font-family="Public Sans"
                                                x="167.37857273646762" y="278.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2167">May</tspan>
                                                <title>May</title>
                                            </text>
                                            <!-- <text id="SvgjsText2169" font-family="Public Sans"
                                                x="204.5738111223493" y="278.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2170">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText2172" font-family="Public Sans"
                                                x="241.76904950823098" y="278.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Public Sans;">
                                                <tspan id="SvgjsTspan2173">Jul</tspan>
                                                <title>Jul</title>
                                            </text> -->
                                        </g>
                                    </g>
                                    <g id="SvgjsG2188" class="apexcharts-grid">
                                        <g id="SvgjsG2189" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine2191" x1="0" y1="0" x2="260.3666687011719" y2="0"
                                                stroke="#e4e6e8" stroke-dasharray="7" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2192" x1="0" y1="49.946000000000005"
                                                x2="260.3666687011719" y2="49.946000000000005" stroke="#e4e6e8"
                                                stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2193" x1="0" y1="99.89200000000001"
                                                x2="260.3666687011719" y2="99.89200000000001" stroke="#e4e6e8"
                                                stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2194" x1="0" y1="149.83800000000002"
                                                x2="260.3666687011719" y2="149.83800000000002" stroke="#e4e6e8"
                                                stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2195" x1="0" y1="199.78400000000002"
                                                x2="260.3666687011719" y2="199.78400000000002" stroke="#e4e6e8"
                                                stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2196" x1="0" y1="249.73000000000002"
                                                x2="260.3666687011719" y2="249.73000000000002" stroke="#e4e6e8"
                                                stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG2190" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine2198" x1="0" y1="249.73000000000002" x2="260.3666687011719"
                                            y2="249.73000000000002" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2197" x1="0" y1="1" x2="0" y2="249.73000000000002"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2132" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2133" class="apexcharts-series" seriesName="2023" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath2135"
                                                d="M 9.298809596470424 139.83800000000002L 9.298809596470424 69.93520000000001Q 9.298809596470424 59.93520000000001 19.298809596470424 59.93520000000001L 11.89642878941127 59.93520000000001Q 21.89642878941127 59.93520000000001 21.89642878941127 69.93520000000001L 21.89642878941127 69.93520000000001L 21.89642878941127 139.83800000000002Q 21.89642878941127 149.83800000000002 11.89642878941127 149.83800000000002L 19.298809596470424 149.83800000000002Q 9.298809596470424 149.83800000000002 9.298809596470424 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 9.298809596470424 139.83800000000002L 9.298809596470424 69.93520000000001Q 9.298809596470424 59.93520000000001 19.298809596470424 59.93520000000001L 11.89642878941127 59.93520000000001Q 21.89642878941127 59.93520000000001 21.89642878941127 69.93520000000001L 21.89642878941127 69.93520000000001L 21.89642878941127 139.83800000000002Q 21.89642878941127 149.83800000000002 11.89642878941127 149.83800000000002L 19.298809596470424 149.83800000000002Q 9.298809596470424 149.83800000000002 9.298809596470424 139.83800000000002z"
                                                pathFrom="M 9.298809596470424 139.83800000000002L 9.298809596470424 139.83800000000002L 21.89642878941127 139.83800000000002L 21.89642878941127 139.83800000000002L 21.89642878941127 139.83800000000002L 21.89642878941127 139.83800000000002L 21.89642878941127 139.83800000000002L 9.298809596470424 139.83800000000002"
                                                cy="59.93520000000001" cx="43.494047982352114" j="0" val="18"
                                                barHeight="89.90280000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2136"
                                                d="M 46.494047982352114 139.83800000000002L 46.494047982352114 124.87580000000003Q 46.494047982352114 114.87580000000003 56.494047982352114 114.87580000000003L 49.09166717529297 114.87580000000003Q 59.09166717529297 114.87580000000003 59.09166717529297 124.87580000000003L 59.09166717529297 124.87580000000003L 59.09166717529297 139.83800000000002Q 59.09166717529297 149.83800000000002 49.09166717529297 149.83800000000002L 56.494047982352114 149.83800000000002Q 46.494047982352114 149.83800000000002 46.494047982352114 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 46.494047982352114 139.83800000000002L 46.494047982352114 124.87580000000003Q 46.494047982352114 114.87580000000003 56.494047982352114 114.87580000000003L 49.09166717529297 114.87580000000003Q 59.09166717529297 114.87580000000003 59.09166717529297 124.87580000000003L 59.09166717529297 124.87580000000003L 59.09166717529297 139.83800000000002Q 59.09166717529297 149.83800000000002 49.09166717529297 149.83800000000002L 56.494047982352114 149.83800000000002Q 46.494047982352114 149.83800000000002 46.494047982352114 139.83800000000002z"
                                                pathFrom="M 46.494047982352114 139.83800000000002L 46.494047982352114 139.83800000000002L 59.09166717529297 139.83800000000002L 59.09166717529297 139.83800000000002L 59.09166717529297 139.83800000000002L 59.09166717529297 139.83800000000002L 59.09166717529297 139.83800000000002L 46.494047982352114 139.83800000000002"
                                                cy="114.87580000000003" cx="80.68928636823381" j="1" val="7"
                                                barHeight="34.9622" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2137"
                                                d="M 83.68928636823381 139.83800000000002L 83.68928636823381 84.91900000000001Q 83.68928636823381 74.91900000000001 93.68928636823381 74.91900000000001L 86.28690556117465 74.91900000000001Q 96.28690556117465 74.91900000000001 96.28690556117465 84.91900000000001L 96.28690556117465 84.91900000000001L 96.28690556117465 139.83800000000002Q 96.28690556117465 149.83800000000002 86.28690556117465 149.83800000000002L 93.68928636823381 149.83800000000002Q 83.68928636823381 149.83800000000002 83.68928636823381 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 83.68928636823381 139.83800000000002L 83.68928636823381 84.91900000000001Q 83.68928636823381 74.91900000000001 93.68928636823381 74.91900000000001L 86.28690556117465 74.91900000000001Q 96.28690556117465 74.91900000000001 96.28690556117465 84.91900000000001L 96.28690556117465 84.91900000000001L 96.28690556117465 139.83800000000002Q 96.28690556117465 149.83800000000002 86.28690556117465 149.83800000000002L 93.68928636823381 149.83800000000002Q 83.68928636823381 149.83800000000002 83.68928636823381 139.83800000000002z"
                                                pathFrom="M 83.68928636823381 139.83800000000002L 83.68928636823381 139.83800000000002L 96.28690556117465 139.83800000000002L 96.28690556117465 139.83800000000002L 96.28690556117465 139.83800000000002L 96.28690556117465 139.83800000000002L 96.28690556117465 139.83800000000002L 83.68928636823381 139.83800000000002"
                                                cy="74.91900000000001" cx="117.8845247541155" j="2" val="15"
                                                barHeight="74.91900000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2138"
                                                d="M 120.8845247541155 139.83800000000002L 120.8845247541155 14.994599999999991Q 120.8845247541155 4.994599999999991 130.8845247541155 4.994599999999991L 123.48214394705636 4.994599999999991Q 133.48214394705636 4.994599999999991 133.48214394705636 14.994599999999991L 133.48214394705636 14.994599999999991L 133.48214394705636 139.83800000000002Q 133.48214394705636 149.83800000000002 123.48214394705636 149.83800000000002L 130.8845247541155 149.83800000000002Q 120.8845247541155 149.83800000000002 120.8845247541155 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 120.8845247541155 139.83800000000002L 120.8845247541155 14.994599999999991Q 120.8845247541155 4.994599999999991 130.8845247541155 4.994599999999991L 123.48214394705636 4.994599999999991Q 133.48214394705636 4.994599999999991 133.48214394705636 14.994599999999991L 133.48214394705636 14.994599999999991L 133.48214394705636 139.83800000000002Q 133.48214394705636 149.83800000000002 123.48214394705636 149.83800000000002L 130.8845247541155 149.83800000000002Q 120.8845247541155 149.83800000000002 120.8845247541155 139.83800000000002z"
                                                pathFrom="M 120.8845247541155 139.83800000000002L 120.8845247541155 139.83800000000002L 133.48214394705636 139.83800000000002L 133.48214394705636 139.83800000000002L 133.48214394705636 139.83800000000002L 133.48214394705636 139.83800000000002L 133.48214394705636 139.83800000000002L 120.8845247541155 139.83800000000002"
                                                cy="4.994599999999991" cx="155.0797631399972" j="3" val="29"
                                                barHeight="144.84340000000003" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2139"
                                                d="M 158.0797631399972 139.83800000000002L 158.0797631399972 69.93520000000001Q 158.0797631399972 59.93520000000001 168.0797631399972 59.93520000000001L 160.67738233293804 59.93520000000001Q 170.67738233293804 59.93520000000001 170.67738233293804 69.93520000000001L 170.67738233293804 69.93520000000001L 170.67738233293804 139.83800000000002Q 170.67738233293804 149.83800000000002 160.67738233293804 149.83800000000002L 168.0797631399972 149.83800000000002Q 158.0797631399972 149.83800000000002 158.0797631399972 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 158.0797631399972 139.83800000000002L 158.0797631399972 69.93520000000001Q 158.0797631399972 59.93520000000001 168.0797631399972 59.93520000000001L 160.67738233293804 59.93520000000001Q 170.67738233293804 59.93520000000001 170.67738233293804 69.93520000000001L 170.67738233293804 69.93520000000001L 170.67738233293804 139.83800000000002Q 170.67738233293804 149.83800000000002 160.67738233293804 149.83800000000002L 168.0797631399972 149.83800000000002Q 158.0797631399972 149.83800000000002 158.0797631399972 139.83800000000002z"
                                                pathFrom="M 158.0797631399972 139.83800000000002L 158.0797631399972 139.83800000000002L 170.67738233293804 139.83800000000002L 170.67738233293804 139.83800000000002L 170.67738233293804 139.83800000000002L 170.67738233293804 139.83800000000002L 170.67738233293804 139.83800000000002L 158.0797631399972 139.83800000000002"
                                                cy="59.93520000000001" cx="192.2750015258789" j="4" val="18"
                                                barHeight="89.90280000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2140"
                                                d="M 195.2750015258789 139.83800000000002L 195.2750015258789 99.90280000000001Q 195.2750015258789 89.90280000000001 205.2750015258789 89.90280000000001L 197.87262071881975 89.90280000000001Q 207.87262071881975 89.90280000000001 207.87262071881975 99.90280000000001L 207.87262071881975 99.90280000000001L 207.87262071881975 139.83800000000002Q 207.87262071881975 149.83800000000002 197.87262071881975 149.83800000000002L 205.2750015258789 149.83800000000002Q 195.2750015258789 149.83800000000002 195.2750015258789 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 195.2750015258789 139.83800000000002L 195.2750015258789 99.90280000000001Q 195.2750015258789 89.90280000000001 205.2750015258789 89.90280000000001L 197.87262071881975 89.90280000000001Q 207.87262071881975 89.90280000000001 207.87262071881975 99.90280000000001L 207.87262071881975 99.90280000000001L 207.87262071881975 139.83800000000002Q 207.87262071881975 149.83800000000002 197.87262071881975 149.83800000000002L 205.2750015258789 149.83800000000002Q 195.2750015258789 149.83800000000002 195.2750015258789 139.83800000000002z"
                                                pathFrom="M 195.2750015258789 139.83800000000002L 195.2750015258789 139.83800000000002L 207.87262071881975 139.83800000000002L 207.87262071881975 139.83800000000002L 207.87262071881975 139.83800000000002L 207.87262071881975 139.83800000000002L 207.87262071881975 139.83800000000002L 195.2750015258789 139.83800000000002"
                                                cy="89.90280000000001" cx="229.4702399117606" j="5" val="12"
                                                barHeight="59.93520000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2141"
                                                d="M 232.4702399117606 139.83800000000002L 232.4702399117606 114.88660000000002Q 232.4702399117606 104.88660000000002 242.4702399117606 104.88660000000002L 235.06785910470143 104.88660000000002Q 245.06785910470143 104.88660000000002 245.06785910470143 114.88660000000002L 245.06785910470143 114.88660000000002L 245.06785910470143 139.83800000000002Q 245.06785910470143 149.83800000000002 235.06785910470143 149.83800000000002L 242.4702399117606 149.83800000000002Q 232.4702399117606 149.83800000000002 232.4702399117606 139.83800000000002z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 232.4702399117606 139.83800000000002L 232.4702399117606 114.88660000000002Q 232.4702399117606 104.88660000000002 242.4702399117606 104.88660000000002L 235.06785910470143 104.88660000000002Q 245.06785910470143 104.88660000000002 245.06785910470143 114.88660000000002L 245.06785910470143 114.88660000000002L 245.06785910470143 139.83800000000002Q 245.06785910470143 149.83800000000002 235.06785910470143 149.83800000000002L 242.4702399117606 149.83800000000002Q 232.4702399117606 149.83800000000002 232.4702399117606 139.83800000000002z"
                                                pathFrom="M 232.4702399117606 139.83800000000002L 232.4702399117606 139.83800000000002L 245.06785910470143 139.83800000000002L 245.06785910470143 139.83800000000002L 245.06785910470143 139.83800000000002L 245.06785910470143 139.83800000000002L 245.06785910470143 139.83800000000002L 232.4702399117606 139.83800000000002"
                                                cy="104.88660000000002" cx="266.66547829764227" j="6" val="9"
                                                barHeight="44.95140000000001" barWidth="18.597619192940847"></path>
                                        </g>
                                        <g id="SvgjsG2142" class="apexcharts-series" seriesName="2022" rel="2"
                                            data:realIndex="1">
                                            <path id="SvgjsPath2144"
                                                d="M 9.298809596470424 169.83800000000002L 9.298809596470424 214.76780000000002Q 9.298809596470424 224.76780000000002 19.298809596470424 224.76780000000002L 11.89642878941127 224.76780000000002Q 21.89642878941127 224.76780000000002 21.89642878941127 214.76780000000002L 21.89642878941127 214.76780000000002L 21.89642878941127 169.83800000000002Q 21.89642878941127 159.83800000000002 11.89642878941127 159.83800000000002L 19.298809596470424 159.83800000000002Q 9.298809596470424 159.83800000000002 9.298809596470424 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 9.298809596470424 169.83800000000002L 9.298809596470424 214.76780000000002Q 9.298809596470424 224.76780000000002 19.298809596470424 224.76780000000002L 11.89642878941127 224.76780000000002Q 21.89642878941127 224.76780000000002 21.89642878941127 214.76780000000002L 21.89642878941127 214.76780000000002L 21.89642878941127 169.83800000000002Q 21.89642878941127 159.83800000000002 11.89642878941127 159.83800000000002L 19.298809596470424 159.83800000000002Q 9.298809596470424 159.83800000000002 9.298809596470424 169.83800000000002z"
                                                pathFrom="M 9.298809596470424 169.83800000000002L 9.298809596470424 169.83800000000002L 21.89642878941127 169.83800000000002L 21.89642878941127 169.83800000000002L 21.89642878941127 169.83800000000002L 21.89642878941127 169.83800000000002L 21.89642878941127 169.83800000000002L 9.298809596470424 169.83800000000002"
                                                cy="204.76780000000002" cx="43.494047982352114" j="0" val="-13"
                                                barHeight="-64.92980000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2145"
                                                d="M 46.494047982352114 169.83800000000002L 46.494047982352114 239.74080000000004Q 46.494047982352114 249.74080000000004 56.494047982352114 249.74080000000004L 49.09166717529297 249.74080000000004Q 59.09166717529297 249.74080000000004 59.09166717529297 239.74080000000004L 59.09166717529297 239.74080000000004L 59.09166717529297 169.83800000000002Q 59.09166717529297 159.83800000000002 49.09166717529297 159.83800000000002L 56.494047982352114 159.83800000000002Q 46.494047982352114 159.83800000000002 46.494047982352114 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 46.494047982352114 169.83800000000002L 46.494047982352114 239.74080000000004Q 46.494047982352114 249.74080000000004 56.494047982352114 249.74080000000004L 49.09166717529297 249.74080000000004Q 59.09166717529297 249.74080000000004 59.09166717529297 239.74080000000004L 59.09166717529297 239.74080000000004L 59.09166717529297 169.83800000000002Q 59.09166717529297 159.83800000000002 49.09166717529297 159.83800000000002L 56.494047982352114 159.83800000000002Q 46.494047982352114 159.83800000000002 46.494047982352114 169.83800000000002z"
                                                pathFrom="M 46.494047982352114 169.83800000000002L 46.494047982352114 169.83800000000002L 59.09166717529297 169.83800000000002L 59.09166717529297 169.83800000000002L 59.09166717529297 169.83800000000002L 59.09166717529297 169.83800000000002L 59.09166717529297 169.83800000000002L 46.494047982352114 169.83800000000002"
                                                cy="229.74080000000004" cx="80.68928636823381" j="1" val="-18"
                                                barHeight="-89.90280000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2146"
                                                d="M 83.68928636823381 169.83800000000002L 83.68928636823381 194.78940000000003Q 83.68928636823381 204.78940000000003 93.68928636823381 204.78940000000003L 86.28690556117465 204.78940000000003Q 96.28690556117465 204.78940000000003 96.28690556117465 194.78940000000003L 96.28690556117465 194.78940000000003L 96.28690556117465 169.83800000000002Q 96.28690556117465 159.83800000000002 86.28690556117465 159.83800000000002L 93.68928636823381 159.83800000000002Q 83.68928636823381 159.83800000000002 83.68928636823381 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 83.68928636823381 169.83800000000002L 83.68928636823381 194.78940000000003Q 83.68928636823381 204.78940000000003 93.68928636823381 204.78940000000003L 86.28690556117465 204.78940000000003Q 96.28690556117465 204.78940000000003 96.28690556117465 194.78940000000003L 96.28690556117465 194.78940000000003L 96.28690556117465 169.83800000000002Q 96.28690556117465 159.83800000000002 86.28690556117465 159.83800000000002L 93.68928636823381 159.83800000000002Q 83.68928636823381 159.83800000000002 83.68928636823381 169.83800000000002z"
                                                pathFrom="M 83.68928636823381 169.83800000000002L 83.68928636823381 169.83800000000002L 96.28690556117465 169.83800000000002L 96.28690556117465 169.83800000000002L 96.28690556117465 169.83800000000002L 96.28690556117465 169.83800000000002L 96.28690556117465 169.83800000000002L 83.68928636823381 169.83800000000002"
                                                cy="184.78940000000003" cx="117.8845247541155" j="2" val="-9"
                                                barHeight="-44.95140000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2147"
                                                d="M 120.8845247541155 169.83800000000002L 120.8845247541155 219.7624Q 120.8845247541155 229.7624 130.8845247541155 229.7624L 123.48214394705636 229.7624Q 133.48214394705636 229.7624 133.48214394705636 219.7624L 133.48214394705636 219.7624L 133.48214394705636 169.83800000000002Q 133.48214394705636 159.83800000000002 123.48214394705636 159.83800000000002L 130.8845247541155 159.83800000000002Q 120.8845247541155 159.83800000000002 120.8845247541155 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 120.8845247541155 169.83800000000002L 120.8845247541155 219.7624Q 120.8845247541155 229.7624 130.8845247541155 229.7624L 123.48214394705636 229.7624Q 133.48214394705636 229.7624 133.48214394705636 219.7624L 133.48214394705636 219.7624L 133.48214394705636 169.83800000000002Q 133.48214394705636 159.83800000000002 123.48214394705636 159.83800000000002L 130.8845247541155 159.83800000000002Q 120.8845247541155 159.83800000000002 120.8845247541155 169.83800000000002z"
                                                pathFrom="M 120.8845247541155 169.83800000000002L 120.8845247541155 169.83800000000002L 133.48214394705636 169.83800000000002L 133.48214394705636 169.83800000000002L 133.48214394705636 169.83800000000002L 133.48214394705636 169.83800000000002L 133.48214394705636 169.83800000000002L 120.8845247541155 169.83800000000002"
                                                cy="209.7624" cx="155.0797631399972" j="3" val="-14"
                                                barHeight="-69.9244" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2148"
                                                d="M 158.0797631399972 169.83800000000002L 158.0797631399972 174.81100000000004Q 158.0797631399972 184.81100000000004 168.0797631399972 184.81100000000004L 160.67738233293804 184.81100000000004Q 170.67738233293804 184.81100000000004 170.67738233293804 174.81100000000004L 170.67738233293804 174.81100000000004L 170.67738233293804 169.83800000000002Q 170.67738233293804 159.83800000000002 160.67738233293804 159.83800000000002L 168.0797631399972 159.83800000000002Q 158.0797631399972 159.83800000000002 158.0797631399972 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 158.0797631399972 169.83800000000002L 158.0797631399972 174.81100000000004Q 158.0797631399972 184.81100000000004 168.0797631399972 184.81100000000004L 160.67738233293804 184.81100000000004Q 170.67738233293804 184.81100000000004 170.67738233293804 174.81100000000004L 170.67738233293804 174.81100000000004L 170.67738233293804 169.83800000000002Q 170.67738233293804 159.83800000000002 160.67738233293804 159.83800000000002L 168.0797631399972 159.83800000000002Q 158.0797631399972 159.83800000000002 158.0797631399972 169.83800000000002z"
                                                pathFrom="M 158.0797631399972 169.83800000000002L 158.0797631399972 169.83800000000002L 170.67738233293804 169.83800000000002L 170.67738233293804 169.83800000000002L 170.67738233293804 169.83800000000002L 170.67738233293804 169.83800000000002L 170.67738233293804 169.83800000000002L 158.0797631399972 169.83800000000002"
                                                cy="164.81100000000004" cx="192.2750015258789" j="4" val="-5"
                                                barHeight="-24.973000000000003" barWidth="18.597619192940847">
                                            </path>
                                            <path id="SvgjsPath2149"
                                                d="M 195.2750015258789 169.83800000000002L 195.2750015258789 234.74620000000004Q 195.2750015258789 244.74620000000004 205.2750015258789 244.74620000000004L 197.87262071881975 244.74620000000004Q 207.87262071881975 244.74620000000004 207.87262071881975 234.74620000000004L 207.87262071881975 234.74620000000004L 207.87262071881975 169.83800000000002Q 207.87262071881975 159.83800000000002 197.87262071881975 159.83800000000002L 205.2750015258789 159.83800000000002Q 195.2750015258789 159.83800000000002 195.2750015258789 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 195.2750015258789 169.83800000000002L 195.2750015258789 234.74620000000004Q 195.2750015258789 244.74620000000004 205.2750015258789 244.74620000000004L 197.87262071881975 244.74620000000004Q 207.87262071881975 244.74620000000004 207.87262071881975 234.74620000000004L 207.87262071881975 234.74620000000004L 207.87262071881975 169.83800000000002Q 207.87262071881975 159.83800000000002 197.87262071881975 159.83800000000002L 205.2750015258789 159.83800000000002Q 195.2750015258789 159.83800000000002 195.2750015258789 169.83800000000002z"
                                                pathFrom="M 195.2750015258789 169.83800000000002L 195.2750015258789 169.83800000000002L 207.87262071881975 169.83800000000002L 207.87262071881975 169.83800000000002L 207.87262071881975 169.83800000000002L 207.87262071881975 169.83800000000002L 207.87262071881975 169.83800000000002L 195.2750015258789 169.83800000000002"
                                                cy="224.74620000000004" cx="229.4702399117606" j="5" val="-17"
                                                barHeight="-84.90820000000001" barWidth="18.597619192940847"></path>
                                            <path id="SvgjsPath2150"
                                                d="M 232.4702399117606 169.83800000000002L 232.4702399117606 224.75700000000003Q 232.4702399117606 234.75700000000003 242.4702399117606 234.75700000000003L 235.06785910470143 234.75700000000003Q 245.06785910470143 234.75700000000003 245.06785910470143 224.75700000000003L 245.06785910470143 224.75700000000003L 245.06785910470143 169.83800000000002Q 245.06785910470143 159.83800000000002 235.06785910470143 159.83800000000002L 242.4702399117606 159.83800000000002Q 232.4702399117606 159.83800000000002 232.4702399117606 169.83800000000002z"
                                                fill="rgba(3,195,236,1)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskip32l25rl)"
                                                pathTo="M 232.4702399117606 169.83800000000002L 232.4702399117606 224.75700000000003Q 232.4702399117606 234.75700000000003 242.4702399117606 234.75700000000003L 235.06785910470143 234.75700000000003Q 245.06785910470143 234.75700000000003 245.06785910470143 224.75700000000003L 245.06785910470143 224.75700000000003L 245.06785910470143 169.83800000000002Q 245.06785910470143 159.83800000000002 235.06785910470143 159.83800000000002L 242.4702399117606 159.83800000000002Q 232.4702399117606 159.83800000000002 232.4702399117606 169.83800000000002z"
                                                pathFrom="M 232.4702399117606 169.83800000000002L 232.4702399117606 169.83800000000002L 245.06785910470143 169.83800000000002L 245.06785910470143 169.83800000000002L 245.06785910470143 169.83800000000002L 245.06785910470143 169.83800000000002L 245.06785910470143 169.83800000000002L 232.4702399117606 169.83800000000002"
                                                cy="214.75700000000003" cx="266.66547829764227" j="6" val="-15"
                                                barHeight="-74.91900000000001" barWidth="18.597619192940847"></path>
                                        </g>
                                        <g id="SvgjsG2134" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG2143" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine2199" x1="0" y1="0" x2="260.3666687011719" y2="0"
                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2200" x1="0" y1="0" x2="260.3666687011719" y2="0"
                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2201" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2202" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2203" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG2174" class="apexcharts-yaxis" rel="0"
                                    transform="translate(19.633331298828125, 0)">
                                    <g id="SvgjsG2175" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2176"
                                            font-family="Public Sans" x="20" y="52.5" text-anchor="end"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a7acb2"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Public Sans;">
                                            <tspan id="SvgjsTspan2177">30</tspan>
                                            <title>30</title>
                                        </text><text id="SvgjsText2178" font-family="Public Sans" x="20" y="102.446"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a7acb2"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Public Sans;">
                                            <tspan id="SvgjsTspan2179">20</tspan>
                                            <title>20</title>
                                        </text><text id="SvgjsText2180" font-family="Public Sans" x="20" y="152.392"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a7acb2"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Public Sans;">
                                            <tspan id="SvgjsTspan2181">10</tspan>
                                            <title>10</title>
                                        </text><text id="SvgjsText2182" font-family="Public Sans" x="20" y="202.338"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a7acb2"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Public Sans;">
                                            <tspan id="SvgjsTspan2183">0</tspan>
                                            <title>0</title>
                                        </text><text id="SvgjsText2184" font-family="Public Sans" x="20" y="252.284"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a7acb2"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Public Sans;">
                                            <tspan id="SvgjsTspan2185">-10</tspan>
                                            <title>-10</title>
                                        </text><text id="SvgjsText2186" font-family="Public Sans" x="20" y="302.23"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a7acb2"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Public Sans;">
                                            <tspan id="SvgjsTspan2187">-20</tspan>
                                            <title>-20</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG2122" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 363px; height: 425px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="card-body px-xl-9" style="position: relative;">
                            <div class="text-center mb-6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-label-primary">
                                        <script>
                                        document.write(new Date().getFullYear() - 1)
                                        </script>2023
                                    </button>
                                    <button type="button"
                                        class="btn btn-label-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">2020</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">2019</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div id="growthChart" style="min-height: 176.95px;">
                                <div id="apexchartspnsoczbt"
                                    class="apexcharts-canvas apexchartspnsoczbt apexcharts-theme-light"
                                    style="width: 314px; height: 176.95px;"><svg id="SvgjsSvg2204" width="314"
                                        height="176.9499969482422" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2206" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(50, -25)">
                                            <defs id="SvgjsDefs2205">
                                                <clipPath id="gridRectMaskpnsoczbt">
                                                    <rect id="SvgjsRect2208" width="222" height="285" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskpnsoczbt"></clipPath>
                                                <clipPath id="nonForecastMaskpnsoczbt"></clipPath>
                                                <clipPath id="gridRectMarkerMaskpnsoczbt">
                                                    <rect id="SvgjsRect2209" width="220" height="287" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2214" x1="1" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop2215" stop-opacity="1"
                                                        stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop2216" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop2217" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient2225" x1="1" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop2226" stop-opacity="1"
                                                        stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop2227" stop-opacity="0.6"
                                                        stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop2228" stop-opacity="0.6"
                                                        stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG2210" class="apexcharts-radialbar">
                                                <g id="SvgjsG2211">
                                                    <g id="SvgjsG2212" class="apexcharts-tracks">
                                                        <g id="SvgjsG2213"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="17.357317073170734"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2219">
                                                        <g id="SvgjsG2224"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Growth" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2229"
                                                                d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="url(#SvgjsLinearGradient2225)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="17.357317073170734" stroke-dasharray="5"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="234" data:value="78" index="0" j="0"
                                                                data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2220" r="54.65121951219512" cx="108"
                                                            cy="108" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG2221" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText2222" font-family="Public Sans" x="108"
                                                                y="123" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="15px" font-weight="500" fill="#646e78"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: Public Sans;">Growth</text><text
                                                                id="SvgjsText2223" font-family="Public Sans" x="108"
                                                                y="99" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="22px" font-weight="500" fill="#384551"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: Public Sans;">78%</text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2230" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2231" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2207" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="text-center fw-medium my-6">62% progresso Growth</div>

                            <div class="d-flex gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar me-2">
                                        <span class="avatar-initial rounded-2 bg-label-primary"><i
                                                class="bx bx-dollar bx-lg text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>
                                            <script>
                                            document.write(new Date().getFullYear() - 1)
                                            </script>2023
                                        </small>
                                        <h6 class="mb-0">$32.5k</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="avatar me-2">
                                        <span class="avatar-initial rounded-2 bg-label-info"><i
                                                class="bx bx-wallet bx-lg text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>
                                            <script>
                                            document.write(new Date().getFullYear() - 2)
                                            </script>2022
                                        </small>
                                        <h6 class="mb-0">$41.2k</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 363px; height: 397px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-xxl-4 mb-4 order-0 order-xxl-4">
    <div class="col-12 col-xl-12 col-md-12 mt-5">
        <div class="card h-100">
            <div class="card-body">
                <div class="bg-label-primary rounded-3 text-center mb-3 pt-4">
                    <img class="img-fluid w-60" src="/assets/img/illustrations/sitting-girl-with-laptop-dark.png"
                        alt="">
                </div>
                <h4 class="mb-2 pb-1">Próximo Evento</h4>
                <p class="small">Feriado 02 de Novembro - Finados</p>
                <div class="row mb-3 g-3">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="avatar flex-shrink-0 me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-calendar-exclamation bx-sm"></i></span>
                            </div>
                            <div>
                                <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                <small>Data</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="avatar flex-shrink-0 me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-time-five bx-sm"></i></span>
                            </div>
                            <div>
                                <h6 class="mb-0 text-nowrap">32 minutos</h6>
                                <small>Duração</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botão de Mais Detalhes -->
                <button class="btn btn-primary w-100" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Mais detalhes</button>

                <!-- Offcanvas com Detalhes do Evento -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd"
                    aria-labelledby="offcanvasEndLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasEndLabel" class="offcanvas-title">Detalhes do Evento</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                        <p class="text-center">
                            <strong>Reunião do Censo Nacional</strong><br>
                            <strong>Data:</strong> 20/02/2025<br>
                            <strong>Horário:</strong> Das 10h às 12h<br>
                            <strong>Local:</strong> Ginásio Municipal, Belo Campo, Bahia<br><br>
                            Participe da reunião referente ao Censo Nacional 2025. O encontro será realizado para
                            discutir as diretrizes e metas de coleta de dados para o censo em nossa região. É de extrema
                            importância a presença de representantes das comunidades locais, escolas, e outros órgãos
                            públicos. A reunião será aberta a todos os interessados em contribuir com o planejamento e
                            execução do Censo.
                        </p>
                        <button type="button" class="btn btn-primary mb-2 d-grid w-100">Confirmar Presença</button>
                        <button type="button" class="btn btn-label-secondary d-grid w-100"
                            data-bs-dismiss="offcanvas">Cancelar</button>
                    </div>
                </div>

                <!--   <a href="javascript:void(0);" class="btn btn-primary w-100">Mais detalhes</a> -->
            </div>
        </div>
    </div>
</div>