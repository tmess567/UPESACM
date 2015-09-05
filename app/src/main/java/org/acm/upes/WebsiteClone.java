package org.acm.upes;

import android.content.Context;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.MenuItem;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Toast;

public class WebsiteClone extends AppCompatActivity {

    private WebView wv;
    private WebSettings webset;
    private Context context = WebsiteClone.this;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_website_clone);
        wv = (WebView) findViewById(R.id.webview);
        webset = wv.getSettings();
        //Enabling Javascript
        webset.setJavaScriptEnabled(true);
        //Load web links within the current WebView
        //TODO: Set the new WVClient to load JS as well
        //TODO: Open external links in Browser not in WebView
        wv.setWebViewClient(new WebViewClient());
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

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_website_clone, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
