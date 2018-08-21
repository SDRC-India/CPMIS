/**
 * 
 */
package org.sdrc.cpmisweb.util;

import org.springframework.beans.BeansException;
import org.springframework.context.ApplicationContext;
import org.springframework.context.ApplicationContextAware;
import org.springframework.stereotype.Service;

/**
 * @author Prakash(prakash@sdrc.co.in) created on : 25-Apr-2018 11:24:10 am
 * This class is used to provide bean object.
 * We use this class when we can't Autowired bean object in non-spring classes. 
 */
@Service
public class BeanUtil implements ApplicationContextAware 
{
    private static ApplicationContext context;
    
    @Override
    public void setApplicationContext(ApplicationContext applicationContext) throws BeansException {
        context = applicationContext;
    }
    
    public static <T> T getBean(Class<T> beanClass) {
        return context.getBean(beanClass);
    }

}
