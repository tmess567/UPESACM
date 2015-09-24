package org.acm.upes;

import android.content.Context;
import android.webkit.JavascriptInterface;
import android.widget.Toast;

public class WebAppInterface {
    Context mContext;

    /**
     * Instantiate the interface and set the context
     */
    WebAppInterface(Context c) {
        mContext = c;
    }

    /**
     * Show a toast from the web page
     */
    @JavascriptInterface
    public void showToast(String toast) {
        String test = "This function has been called by the Website to display notifications";
        Toast.makeText(mContext, test, Toast.LENGTH_SHORT).show();
    }
}