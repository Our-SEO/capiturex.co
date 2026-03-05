(() => {
  "use strict";
  let t = [
      ["T", 1e12],
      ["B", 1e9],
      ["M", 1e6],
      ["K", 1e3],
    ],
    e = {},
    i = {
      amount: { maximumFractionDigits: 2, minimumFractionDigits: 2 },
      maxAmount: { minimumFractionDigits: 2 },
      percent: {
        maximumFractionDigits: 2,
        minimumFractionDigits: 2,
        signDisplay: "exceptZero",
      },
    },
    n = /[1-9]/;
  function a(t, a) {
    let s,
      o = i[a.preset] || {},
      {
        thousandSeparator: r = ".",
        decimalSeparator: l = ",",
        useGrouping: c = !0,
        signDisplay: m = o.signDisplay || "negative",
        minimumFractionDigits: d = o.minimumFractionDigits || 0,
      } = a,
      { maximumFractionDigits: u = o.maximumFractionDigits } = a;
    if ((u < d && (u = d), "u" < typeof Intl || !Intl.NumberFormat))
      s = String(t);
    else {
      let i = `${c};${d};${u}`,
        n = e[i];
      n ||
        ((n = new Intl.NumberFormat("en-US", {
          style: "decimal",
          useGrouping: c,
          minimumFractionDigits: d,
          maximumFractionDigits: u ?? 20,
        })),
        (e[i] = n)),
        (s = n.format(t));
    }
    let [p, g = ""] = s.split(".");
    return (
      (p = p.split(",").join(r)),
      (g = g.replace(/0+$/, "")),
      void 0 !== d && (g = g.padEnd(d, "0")),
      "exceptZero" === m &&
        "-" !== p[0] &&
        ("0" !== p || n.test(g)) &&
        (p = `+${p}`),
      `${p}${g ? `${l}${g}` : ""}`
    );
  }
  let s = ["marketCap", "volume24h", "volume24hTo", "circulatingSupply"];
  async function o(e) {
    let i,
      { container: n, quotecast: o } = e,
      r =
        ((i = new Map()),
        n
          .querySelectorAll(
            '[data-name="quotecastField"][data-key][data-field]'
          )
          .forEach((t) => {
            let { key: e, field: n } = t.dataset,
              a = `${e}-${n}`,
              s = i.get(a);
            s || ((s = []), i.set(a, s)), s.push(t);
          }),
        i);
    o.on((e) =>
      (function (e) {
        let { updates: i, fieldElements: n } = e;
        i.forEach((e, i) => {
          let { lastPrice: o, relativeDifference: r } = e;
          if (void 0 !== o) {
            let t = n.get(`${i}-lastPrice`);
            t?.forEach((t) => {
              t.textContent = a(o, { preset: "maxAmount" });
            });
          }
          if (void 0 !== r) {
            let t = n.get(`${i}-relativeDifference`);
            t?.forEach((t) => {
              var e;
              let i = a(r, { preset: "percent" });
              (t.textContent = `${i}%`),
                (e = i[0]),
                t.classList.toggle("negative-sign", "-" === e),
                t.classList.toggle("positive-sign", "+" === e);
            });
          }
          s.forEach((s) => {
            let o = e[s],
              r = n.get(`${i}-${s}`);
            if (void 0 !== o && r) {
              var l;
              let e,
                i,
                n,
                s,
                [c, m] =
                  ((e = ""),
                  (i = 1),
                  (n = Math.abs((l = o))),
                  (s = t.find(([t, e]) => n >= e)) && (([e, i] = s), (l /= i)),
                  [l, e, i]);
              r.forEach((t) => {
                t.textContent = `${a(c, { preset: "amount" })}${m}`;
              });
            }
          });
        });
      })({ updates: e, fieldElements: r })
    );
  }

  async function l() {
    let { document: t } = window,
      e = t.getElementById("app-light-mode"),
      i = t.getElementById("app-dark-mode");
    if (!e || !i || "u" < typeof IntersectionObserver) return;
    let n = (t) => {
        t.style.cssText = "transition: opacity 0.5s ease-out; opacity: 1;";
      },
      a = (t) => {
        t.style.cssText = "transition: opacity 0.5s ease-in; opacity: 0;";
      },
      s = 0,
      o = 0;
    new IntersectionObserver(
      (t) => {
        t.forEach((t) => {
          let {
            isIntersecting: r,
            intersectionRatio: l,
            boundingClientRect: { y: c },
          } = t;
          c < s && r
            ? l > o && l >= 0.6 && (n(i), a(e))
            : c > s && r && l >= o && l >= 0.6 && (n(e), a(i)),
            (s = c),
            (o = l);
        });
      },
      { threshold: Array.from({ length: 11 }, (t, e) => 0.1 * e) }
    ).observe(e);
  }
  Promise.all([l(), o({ container: document.body })]).catch(() => {});
})();
