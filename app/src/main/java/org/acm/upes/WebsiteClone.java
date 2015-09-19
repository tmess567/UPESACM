package org.acm.upes;

import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.KeyEvent;
import android.view.Window;
import android.webkit.WebChromeClient;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Toast;

public class WebsiteClone extends AppCompatActivity {

    private WebView wv;
    private WebSettings webset;
    private Context context = WebsiteClone.this;
    private String tag = "WebsiteClone.java";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        boolean b = requestWindowFeature(Window.FEATURE_NO_TITLE);
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_website_clone);
        Toast.makeText(context, Boolean.toString(b), Toast.LENGTH_LONG).show();
        wv = (WebView) findViewById(R.id.webview);
        wv.setWebViewClient(new WebViewClient() {
            @Override
            public boolean shouldOverrideUrlLoading(WebView view, String url) {
                if (url.substring(0, 7).equals("file://")) {
                    return false;
                } else {
                    Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(url));
                    startActivity(intent);
                }
                return true;
            }
        });
        wv.setWebChromeClient(new WebChromeClient());
        wv.getSettings().setJavaScriptEnabled(true);
        //TODO:If network conn available load from net.
        wv.loadUrl(getString(R.string.websiteURL));
        //Adding JS Interface
        //Code on the Website index:
        /*<script> App.showToast("Hello from WebSite"); </script>*/
        //TODO:Add functionality to display notification on demand from website
        wv.addJavascriptInterface(new WebAppInterface(context), "App");
    }

    //If user presses back button, open previous page of webview
    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        if (keyCode == KeyEvent.KEYCODE_BACK && wv.canGoBack()) {
            wv.goBack();
            return true;
        }
        return super.onKeyDown(keyCode, event);
    }

}
