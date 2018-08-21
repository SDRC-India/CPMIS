package org.sdrc.cpmisweb.model;

import java.io.Serializable;

public class Error implements Serializable {
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 4564480500225322541L;
	private String errorCode;
	private String errorMessage;
	private boolean hasError;
	
	public String getErrorCode() {
		return errorCode;
	}
	
	public void setErrorCode(String errorCode) {
		this.errorCode = errorCode;
	}
	
	public String getErrorMessage() {
		return errorMessage;
	}
	
	public void setErrorMessage(String errorMessage) {
		this.errorMessage = errorMessage;
	}

	public boolean isHasError() {
		return hasError;
	}

	public void setHasError(boolean hasError) {
		this.hasError = hasError;
	}
	
	

}
