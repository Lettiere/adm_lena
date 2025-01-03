!(function () {
  mapboxgl.accessToken =
    "pk.eyJ1IjoibG9yZC1zaGl2YW0iLCJhIjoiY2xpeTlpNHFwMDVzbDNmczl2MXdob29udyJ9.JOLDU6VQG_ra1CoVG4jbUA";
  const t = {
      type: "FeatureCollection",
      features: [
        {
          type: "Feature",
          properties: { iconSize: [20, 42], message: "1" },
          geometry: { type: "Point", coordinates: [-73.999024, 40.75249842] },
        },
        {
          type: "Feature",
          properties: { iconSize: [20, 42], message: "2" },
          geometry: { type: "Point", coordinates: [-74.03, 40.75699842] },
        },
        {
          type: "Feature",
          properties: { iconSize: [20, 42], message: "3" },
          geometry: { type: "Point", coordinates: [-73.967524, 40.7599842] },
        },
        {
          type: "Feature",
          properties: { iconSize: [20, 42], message: "4" },
          geometry: { type: "Point", coordinates: [-74.0325, 40.742992] },
        },
      ],
    },
    r = new mapboxgl.Map({
      container: "map",
      style: "mapbox://styles/mapbox/light-v9",
      center: [-73.999024, 40.75249842],
      zoom: 12.25,
    });
  for (const i of t.features) {
    var e = document.createElement("div"),
      o = i.properties.iconSize[0],
      s = i.properties.iconSize[1];
    (e.className = "marker"),
      e.insertAdjacentHTML(
        "afterbegin",
        '<img src="' +
          assetsPath +
          'img/illustrations/fleet-car.png" alt="Fleet Car" width="20" class="rounded-3" id="carFleet-' +
          i.properties.message +
          '">'
      ),
      (e.style.width = o + "px"),
      (e.style.height = s + "px"),
      (e.style.cursor = "pointer"),
      new mapboxgl.Marker(e).setLngLat(i.geometry.coordinates).addTo(r);
    const n = document.getElementById("fl-" + i.properties.message),
      c = document.getElementById("carFleet-" + i.properties.message);
    n.addEventListener("click", function () {
      var e = document.querySelector(".marker-focus");
      Helpers._hasClass("active", n)
        ? (r.flyTo({
            center: t.features[i.properties.message - 1].geometry.coordinates,
            zoom: 16,
          }),
          e && Helpers._removeClass("marker-focus", e),
          Helpers._addClass("marker-focus", c))
        : Helpers._removeClass("marker-focus", c);
    });
  }
  var a = document.getElementById("carFleet-1"),
    a =
      (Helpers._addClass("marker-focus", a),
      document
        .querySelector(".mapboxgl-control-container")
        .classList.add("d-none"),
      $(".logistics-fleet-sidebar-body"));
  a.length &&
    new PerfectScrollbar(a[0], { wheelPropagation: !1, suppressScrollX: !0 });
})();
