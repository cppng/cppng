var colors = ["#f1556c"];
(dataColors = $("#total-revenue").data("colors")) &&
  (colors = dataColors.split(","));
var options = {
  series: [80, 20],
  labels: ["PSIRS", "MDAs"],
  chart: {
    type: "donut",
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 300,
        },
        legend: {
          position: "bottom",
        },
      },
    },
  ],
};
(chart = new ApexCharts(
  document.querySelector("#total-revenue"),
  options
)).render();
var dataColors;
colors = ["#1abc9c", "#4a81d4"];
(dataColors = $("#sales-analytics").data("colors")) &&
  (colors = dataColors.split(","));
var chart;
options = {
  series: [
    {
      name: "PSIRS",
      type: "column",
      data: [440, 505, 414, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    },
    {
      name: "MDAs",
      type: "column",
      data: [23, 40, 505, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    },
  ],
  chart: { height: 378, type: "line", offsetY: 10 },
  stroke: { width: [2, 3] },
  plotOptions: { bar: { columnWidth: "50%" } },
  colors: colors,
  dataLabels: { enabled: !0, enabledOnSeries: [1] },
  labels: [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sept",
    "Oct",
    "Nov",
    "Dec"
  ],
  xaxis: { type: "datetime" },
  legend: { offsetY: 7 },
  grid: { padding: { bottom: 20 } },
  fill: {
    type: "gradient",
    gradient: {
      shade: "light",
      type: "horizontal",
      shadeIntensity: 0.25,
      gradientToColors: void 0,
      inverseColors: !0,
      opacityFrom: 0.75,
      opacityTo: 0.75,
      stops: [0, 0, 0],
    },
  },
  yaxis: [
    { title: { text: "PSIRS" } },
    { opposite: !0, title: { text: "MDAs" } },
  ],
};
(chart = new ApexCharts(
  document.querySelector("#sales-analytics"),
  options
)).render(),
  $("#dash-daterange").flatpickr({
    altInput: true,
    dateFormat: "Y-m",
    mode: "single",
    altFormat: "F, y",

  });
