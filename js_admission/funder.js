(function () {
  let timeout;

  function init(attempts) {
    clearTimeout(timeout)
    attempts = attempts || 1
    if (attempts > 3) return
    if (typeof CodeFundAd === 'undefined') {
      timeout = setTimeout(function () { init(attempts + 1) }, 350)
      return
    }
    new CodeFundAd({"selector":"#codefund_ad","template":"bottom-bar","theme":"light","fallback":true,"urls":{"impression":"https://codefund.io/display/9b5e682a-fbd7-4fd8-b0b6-1702117fa70d.gif","campaign":"https://codefund.io/impressions/9b5e682a-fbd7-4fd8-b0b6-1702117fa70d/click?campaign_id=287\u0026creative_id=254\u0026property_id=441\u0026template=bottom-bar\u0026theme=light","poweredBy":"https://codefund.io/invite/uaY8mStZDXQ","adblock":"https://cdn2.codefund.app/assets/px.js","uplift":"https://codefund.io/impressions/9b5e682a-fbd7-4fd8-b0b6-1702117fa70d/uplift?advertiser_id=185"},"creative":{"name":"CodeFund - Fund OSS (Fallback)","headline":"CodeFund","body":"funds OSS maintainers, bloggers, and builders via non-tracking ethical ads","cta":"Do you qualify?","imageUrls":{"icon":"https://cdn2.codefund.app/VZ1vXULcKUs8ZeWjau5PMuvd","small":"https://cdn2.codefund.app/mVpfBjXqZNLcn9dxAETSvhun","large":"https://cdn2.codefund.app/PJS996n5Eembq7EHjxEB9coY","wide":"https://cdn2.codefund.app/jQWcfZ3kbbQLjZzVb398QTZj"}}})
  }

  const codefundStylesheetId = 'codefund-style'
  const codefundScriptId = 'codefund-script'

  if (!document.getElementById(codefundStylesheetId)) {
    const stylesheet = document.createElement('link')
    stylesheet.setAttribute('id', codefundStylesheetId)
    stylesheet.setAttribute('rel', 'stylesheet')
    stylesheet.setAttribute('media', 'all')
    stylesheet.setAttribute('href', 'https://codefund.io/packs/css/code_fund_ad-cc9560e3.css')
    stylesheet.addEventListener('load', init)
    document.head.appendChild(stylesheet)
  }

  if (document.getElementById(codefundScriptId)) {
    init()
  } else {
    const script = document.createElement('script')
    script.setAttribute('id', codefundScriptId)
    script.setAttribute('type', 'text/javascript')
    script.setAttribute('src', 'https://codefund.io/packs/js/code_fund_ad-fbf67ae56c2a9c818495.js')
    script.addEventListener('load', init)
    document.head.appendChild(script)
  }
})()
