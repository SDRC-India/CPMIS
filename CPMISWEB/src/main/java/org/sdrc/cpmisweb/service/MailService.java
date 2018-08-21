/**
 * 
 */
package org.sdrc.cpmisweb.service;

import org.sdrc.cpmisweb.model.MailModel;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 11-Jan-2018 3:07:57 pm
 */
public interface MailService {

	String sendMail(MailModel mail) throws Exception;
}
