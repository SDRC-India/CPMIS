/**
 * 
 */
package org.sdrc.cpmisweb.util;

import java.util.Map;
import java.util.Map.Entry;
import java.util.Set;

import org.springframework.beans.factory.InitializingBean;

/**
 * @author Prakash(prakash@sdrc.co.in) created on : 23-May-2018 3:28:30 pm
 */
public class SystemPropertiesInitializingBean implements InitializingBean {

    private Map<String, String> systemProperties;

    @Override
    public void afterPropertiesSet() throws Exception {
        if (null == systemProperties || systemProperties.isEmpty()) {
            return;
        }

        final Set<Entry<String, String>> entrySet = systemProperties.entrySet();
        for (final Entry<String, String> entry : entrySet) {

            final String key = entry.getKey();
            final String value = entry.getValue();

            System.setProperty(key, value);
        }

    }

    public void setSystemProperties(final Map<String, String> systemProperties) {
        this.systemProperties = systemProperties;
    }

}